<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Core\Swagger\SchemaFormatter;

use ApiPlatform\Core\Metadata\Property\PropertyMetadata;

class DefaultDefinitionNormalizer implements DefinititionNormalizerInterface
{
    public function supports(string $mimeType): bool
    {
        return true;
    }

    public function buildBaseSchemaFormat(): array
    {
        return [];
    }

    public function setProperty(\ArrayObject $definitionSchema, $normalizedPropertyName, \ArrayObject $property, PropertyMetadata $propertyMetadata): void
    {
        $definitionSchema['properties'][$normalizedPropertyName] = $property;
    }
}
