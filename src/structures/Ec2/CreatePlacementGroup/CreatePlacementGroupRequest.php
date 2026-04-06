<?php

namespace Sunaoka\Aws\Structures\Ec2\CreatePlacementGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $PartitionCount
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property 'host'|'rack'|null $SpreadLevel
 * @property string|null $LinkedGroupId
 * @property Shapes\OperatorRequest|null $Operator
 * @property bool|null $DryRun
 * @property string|null $GroupName
 * @property 'cluster'|'spread'|'partition'|null $Strategy
 */
class CreatePlacementGroupRequest extends Request
{
    /**
     * @param array{
     *     PartitionCount?: int|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     SpreadLevel?: 'host'|'rack'|null,
     *     LinkedGroupId?: string|null,
     *     Operator?: Shapes\OperatorRequest|null,
     *     DryRun?: bool|null,
     *     GroupName?: string|null,
     *     Strategy?: 'cluster'|'spread'|'partition'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
