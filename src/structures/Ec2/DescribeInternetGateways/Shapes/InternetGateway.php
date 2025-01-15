<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInternetGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InternetGatewayAttachment>|null $Attachments
 * @property string|null $InternetGatewayId
 * @property string|null $OwnerId
 * @property list<Tag>|null $Tags
 */
class InternetGateway extends Shape
{
    /**
     * @param array{
     *     Attachments?: list<InternetGatewayAttachment>|null,
     *     InternetGatewayId?: string|null,
     *     OwnerId?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
