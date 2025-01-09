<?php

namespace Sunaoka\Aws\Structures\Ec2\CreatePlacementGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $PartitionCount
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property 'host'|'rack' $SpreadLevel
 * @property bool $DryRun
 * @property string $GroupName
 * @property 'cluster'|'spread'|'partition' $Strategy
 */
class CreatePlacementGroupRequest extends Request
{
    /**
     * @param array{
     *     PartitionCount?: int,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     SpreadLevel?: 'host'|'rack',
     *     DryRun?: bool,
     *     GroupName?: string,
     *     Strategy?: 'cluster'|'spread'|'partition'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
