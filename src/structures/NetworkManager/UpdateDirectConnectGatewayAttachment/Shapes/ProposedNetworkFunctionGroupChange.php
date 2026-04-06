<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateDirectConnectGatewayAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Tag>|null $Tags
 * @property int|null $AttachmentPolicyRuleNumber
 * @property string|null $NetworkFunctionGroupName
 */
class ProposedNetworkFunctionGroupChange extends Shape
{
    /**
     * @param array{
     *     Tags?: list<Tag>|null,
     *     AttachmentPolicyRuleNumber?: int|null,
     *     NetworkFunctionGroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
