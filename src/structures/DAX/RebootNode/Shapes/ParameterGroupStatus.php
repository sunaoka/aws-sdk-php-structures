<?php

namespace Sunaoka\Aws\Structures\DAX\RebootNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ParameterGroupName
 * @property string|null $ParameterApplyStatus
 * @property list<string>|null $NodeIdsToReboot
 */
class ParameterGroupStatus extends Shape
{
    /**
     * @param array{
     *     ParameterGroupName?: string|null,
     *     ParameterApplyStatus?: string|null,
     *     NodeIdsToReboot?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
