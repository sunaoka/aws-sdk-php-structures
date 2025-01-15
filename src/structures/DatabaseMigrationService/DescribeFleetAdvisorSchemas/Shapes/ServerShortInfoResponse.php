<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServerId
 * @property string|null $IpAddress
 * @property string|null $ServerName
 */
class ServerShortInfoResponse extends Shape
{
    /**
     * @param array{
     *     ServerId?: string|null,
     *     IpAddress?: string|null,
     *     ServerName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
