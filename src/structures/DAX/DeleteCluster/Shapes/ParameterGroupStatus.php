<?php

namespace Sunaoka\Aws\Structures\DAX\DeleteCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterGroupName
 * @property string $ParameterApplyStatus
 * @property list<string> $NodeIdsToReboot
 */
class ParameterGroupStatus extends Shape
{
    /**
     * @param array{
     *     ParameterGroupName?: string,
     *     ParameterApplyStatus?: string,
     *     NodeIdsToReboot?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
