<?php

namespace Sunaoka\Aws\Structures\DataZone\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $defaultValue
 * @property string|null $description
 * @property string $fieldType
 * @property bool|null $isEditable
 * @property bool|null $isOptional
 * @property string $keyName
 */
class CustomParameter extends Shape
{
    /**
     * @param array{
     *     defaultValue?: string|null,
     *     description?: string|null,
     *     fieldType: string,
     *     isEditable?: bool|null,
     *     isOptional?: bool|null,
     *     keyName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
