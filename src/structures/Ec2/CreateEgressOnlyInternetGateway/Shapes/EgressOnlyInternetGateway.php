<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateEgressOnlyInternetGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InternetGatewayAttachment>|null $Attachments
 * @property string|null $EgressOnlyInternetGatewayId
 * @property list<Tag>|null $Tags
 */
class EgressOnlyInternetGateway extends Shape
{
    /**
     * @param array{
     *     Attachments?: list<InternetGatewayAttachment>|null,
     *     EgressOnlyInternetGatewayId?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
