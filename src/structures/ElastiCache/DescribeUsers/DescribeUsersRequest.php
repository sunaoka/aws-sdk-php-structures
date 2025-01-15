<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Engine
 * @property string|null $UserId
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeUsersRequest extends Request
{
    /**
     * @param array{
     *     Engine?: string|null,
     *     UserId?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
