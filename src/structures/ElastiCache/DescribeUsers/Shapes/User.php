<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserId
 * @property string|null $UserName
 * @property string|null $Status
 * @property string|null $Engine
 * @property string|null $MinimumEngineVersion
 * @property string|null $AccessString
 * @property list<string>|null $UserGroupIds
 * @property Authentication|null $Authentication
 * @property string|null $ARN
 */
class User extends Shape
{
    /**
     * @param array{
     *     UserId?: string|null,
     *     UserName?: string|null,
     *     Status?: string|null,
     *     Engine?: string|null,
     *     MinimumEngineVersion?: string|null,
     *     AccessString?: string|null,
     *     UserGroupIds?: list<string>|null,
     *     Authentication?: Authentication|null,
     *     ARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
