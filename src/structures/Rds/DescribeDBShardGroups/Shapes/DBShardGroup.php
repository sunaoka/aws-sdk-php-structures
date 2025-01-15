<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBShardGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBShardGroupResourceId
 * @property string|null $DBShardGroupIdentifier
 * @property string|null $DBClusterIdentifier
 * @property double|null $MaxACU
 * @property double|null $MinACU
 * @property int|null $ComputeRedundancy
 * @property string|null $Status
 * @property bool|null $PubliclyAccessible
 * @property string|null $Endpoint
 * @property string|null $DBShardGroupArn
 * @property list<Tag>|null $TagList
 */
class DBShardGroup extends Shape
{
    /**
     * @param array{
     *     DBShardGroupResourceId?: string|null,
     *     DBShardGroupIdentifier?: string|null,
     *     DBClusterIdentifier?: string|null,
     *     MaxACU?: double|null,
     *     MinACU?: double|null,
     *     ComputeRedundancy?: int|null,
     *     Status?: string|null,
     *     PubliclyAccessible?: bool|null,
     *     Endpoint?: string|null,
     *     DBShardGroupArn?: string|null,
     *     TagList?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
