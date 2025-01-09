<?php

namespace Sunaoka\Aws\Structures\Athena\ListWorkGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'ENABLED'|'DISABLED' $State
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property EngineVersion $EngineVersion
 * @property string $IdentityCenterApplicationArn
 */
class WorkGroupSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     State?: 'ENABLED'|'DISABLED',
     *     Description?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     EngineVersion?: EngineVersion,
     *     IdentityCenterApplicationArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
