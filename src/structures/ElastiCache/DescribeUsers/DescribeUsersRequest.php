<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Engine
 * @property string $UserId
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeUsersRequest extends Request
{
    /**
     * @param array{
     *     Engine?: string,
     *     UserId?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
