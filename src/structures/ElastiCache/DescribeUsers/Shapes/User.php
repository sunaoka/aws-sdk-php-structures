<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserId
 * @property string $UserName
 * @property string $Status
 * @property string $Engine
 * @property string $MinimumEngineVersion
 * @property string $AccessString
 * @property list<string> $UserGroupIds
 * @property Authentication $Authentication
 * @property string $ARN
 */
class User extends Shape
{
    /**
     * @param array{
     *     UserId?: string,
     *     UserName?: string,
     *     Status?: string,
     *     Engine?: string,
     *     MinimumEngineVersion?: string,
     *     AccessString?: string,
     *     UserGroupIds?: list<string>,
     *     Authentication?: Authentication,
     *     ARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
