<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheSecurityGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerId
 * @property string $CacheSecurityGroupName
 * @property string $Description
 * @property list<EC2SecurityGroup> $EC2SecurityGroups
 * @property string $ARN
 */
class CacheSecurityGroup extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string,
     *     CacheSecurityGroupName?: string,
     *     Description?: string,
     *     EC2SecurityGroups?: list<EC2SecurityGroup>,
     *     ARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
