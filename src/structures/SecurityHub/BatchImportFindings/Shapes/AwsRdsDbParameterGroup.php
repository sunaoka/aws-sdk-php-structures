<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DbParameterGroupName
 * @property string $ParameterApplyStatus
 */
class AwsRdsDbParameterGroup extends Shape
{
    /**
     * @param array{
     *     DbParameterGroupName?: string,
     *     ParameterApplyStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
