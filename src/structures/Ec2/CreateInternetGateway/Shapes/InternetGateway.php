<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInternetGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InternetGatewayAttachment> $Attachments
 * @property string $InternetGatewayId
 * @property string $OwnerId
 * @property list<Tag> $Tags
 */
class InternetGateway extends Shape
{
    /**
     * @param array{
     *     Attachments?: list<InternetGatewayAttachment>,
     *     InternetGatewayId?: string,
     *     OwnerId?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
