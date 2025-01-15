<?php

namespace Sunaoka\Aws\Structures\CloudFormation\EstimateTemplateCost\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ParameterKey
 * @property string|null $ParameterValue
 * @property bool|null $UsePreviousValue
 * @property string|null $ResolvedValue
 */
class Parameter extends Shape
{
    /**
     * @param array{
     *     ParameterKey?: string|null,
     *     ParameterValue?: string|null,
     *     UsePreviousValue?: bool|null,
     *     ResolvedValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
