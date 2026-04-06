<?php

namespace Sunaoka\Aws\Structures\Ec2\CreatePlacementGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $GroupName
 * @property 'cluster'|'spread'|'partition'|null $Strategy
 * @property int|null $PartitionCount
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property 'host'|'rack'|null $SpreadLevel
 */
class CreatePlacementGroupRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     GroupName?: string|null,
     *     Strategy?: 'cluster'|'spread'|'partition'|null,
     *     PartitionCount?: int|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     SpreadLevel?: 'host'|'rack'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
