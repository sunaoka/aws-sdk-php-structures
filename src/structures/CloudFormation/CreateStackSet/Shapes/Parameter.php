<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateStackSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterKey
 * @property string $ParameterValue
 * @property bool $UsePreviousValue
 * @property string $ResolvedValue
 */
class Parameter extends Shape
{
    /**
     * @param array{
     *     ParameterKey?: string,
     *     ParameterValue?: string,
     *     UsePreviousValue?: bool,
     *     ResolvedValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
