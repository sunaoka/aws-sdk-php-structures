<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheSecurityGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerId
 * @property string|null $CacheSecurityGroupName
 * @property string|null $Description
 * @property list<EC2SecurityGroup>|null $EC2SecurityGroups
 * @property string|null $ARN
 */
class CacheSecurityGroup extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string|null,
     *     CacheSecurityGroupName?: string|null,
     *     Description?: string|null,
     *     EC2SecurityGroups?: list<EC2SecurityGroup>|null,
     *     ARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
