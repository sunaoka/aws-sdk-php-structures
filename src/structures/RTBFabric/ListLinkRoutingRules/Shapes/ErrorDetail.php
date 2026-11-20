<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListLinkRoutingRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VPC_NOT_FOUND'|'EC2_SUBNET_NOT_FOUND'|'EC2_SECURITY_GROUP_NOT_FOUND'|'EC2_SUBNET_IP_EXHAUSTION'|'IAM_ASSUME_ROLE_ACCESS_DENIED'|'INTERNAL_ERROR' $code
 * @property string $message
 * @property list<string>|null $resourceIds
 */
class ErrorDetail extends Shape
{
    /**
     * @param array{
     *     code: 'VPC_NOT_FOUND'|'EC2_SUBNET_NOT_FOUND'|'EC2_SECURITY_GROUP_NOT_FOUND'|'EC2_SUBNET_IP_EXHAUSTION'|'IAM_ASSUME_ROLE_ACCESS_DENIED'|'INTERNAL_ERROR',
     *     message: string,
     *     resourceIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
