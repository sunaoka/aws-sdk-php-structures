<?php

namespace Sunaoka\Aws\Structures\Ssm\GetParameterHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyText
 * @property string|null $PolicyType
 * @property string|null $PolicyStatus
 */
class ParameterInlinePolicy extends Shape
{
    /**
     * @param array{
     *     PolicyText?: string|null,
     *     PolicyType?: string|null,
     *     PolicyStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
