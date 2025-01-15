<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZone
 * @property string $Description
 * @property string $FlowArn
 * @property string $Name
 * @property 'OWNED'|'ENTITLED' $SourceType
 * @property 'STANDBY'|'ACTIVE'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'ERROR' $Status
 * @property Maintenance|null $Maintenance
 */
class ListedFlow extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone: string,
     *     Description: string,
     *     FlowArn: string,
     *     Name: string,
     *     SourceType: 'OWNED'|'ENTITLED',
     *     Status: 'STANDBY'|'ACTIVE'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'ERROR',
     *     Maintenance?: Maintenance|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
