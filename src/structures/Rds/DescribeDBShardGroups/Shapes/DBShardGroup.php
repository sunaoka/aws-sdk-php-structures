<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBShardGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBShardGroupResourceId
 * @property string $DBShardGroupIdentifier
 * @property string $DBClusterIdentifier
 * @property double $MaxACU
 * @property double $MinACU
 * @property int $ComputeRedundancy
 * @property string $Status
 * @property bool $PubliclyAccessible
 * @property string $Endpoint
 * @property string $DBShardGroupArn
 * @property list<Tag> $TagList
 */
class DBShardGroup extends Shape
{
    /**
     * @param array{
     *     DBShardGroupResourceId?: string,
     *     DBShardGroupIdentifier?: string,
     *     DBClusterIdentifier?: string,
     *     MaxACU?: double,
     *     MinACU?: double,
     *     ComputeRedundancy?: int,
     *     Status?: string,
     *     PubliclyAccessible?: bool,
     *     Endpoint?: string,
     *     DBShardGroupArn?: string,
     *     TagList?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
