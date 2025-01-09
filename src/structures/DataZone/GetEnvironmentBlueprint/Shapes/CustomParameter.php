<?php

namespace Sunaoka\Aws\Structures\DataZone\GetEnvironmentBlueprint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $defaultValue
 * @property string $description
 * @property string $fieldType
 * @property bool $isEditable
 * @property bool $isOptional
 * @property string $keyName
 */
class CustomParameter extends Shape
{
    /**
     * @param array{
     *     defaultValue?: string,
     *     description?: string,
     *     fieldType: string,
     *     isEditable?: bool,
     *     isOptional?: bool,
     *     keyName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
