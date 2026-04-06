<?php

namespace Sunaoka\Aws\Structures\Athena\ListWorkGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'ENABLED'|'DISABLED'|null $State
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property EngineVersion|null $EngineVersion
 * @property string|null $IdentityCenterApplicationArn
 */
class WorkGroupSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     State?: 'ENABLED'|'DISABLED'|null,
     *     Description?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     EngineVersion?: EngineVersion|null,
     *     IdentityCenterApplicationArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
