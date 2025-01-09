<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeEgressOnlyInternetGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InternetGatewayAttachment> $Attachments
 * @property string $EgressOnlyInternetGatewayId
 * @property list<Tag> $Tags
 */
class EgressOnlyInternetGateway extends Shape
{
    /**
     * @param array{
     *     Attachments?: list<InternetGatewayAttachment>,
     *     EgressOnlyInternetGatewayId?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
