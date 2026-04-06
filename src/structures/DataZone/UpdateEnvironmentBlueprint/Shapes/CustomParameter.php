<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironmentBlueprint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $keyName
 * @property string|null $description
 * @property string $fieldType
 * @property string|null $defaultValue
 * @property bool|null $isEditable
 * @property bool|null $isOptional
 * @property bool|null $isUpdateSupported
 */
class CustomParameter extends Shape
{
    /**
     * @param array{
     *     keyName: string,
     *     description?: string|null,
     *     fieldType: string,
     *     defaultValue?: string|null,
     *     isEditable?: bool|null,
     *     isOptional?: bool|null,
     *     isUpdateSupported?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
