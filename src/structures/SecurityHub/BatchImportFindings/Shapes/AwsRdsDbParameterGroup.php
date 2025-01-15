<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DbParameterGroupName
 * @property string|null $ParameterApplyStatus
 */
class AwsRdsDbParameterGroup extends Shape
{
    /**
     * @param array{
     *     DbParameterGroupName?: string|null,
     *     ParameterApplyStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
