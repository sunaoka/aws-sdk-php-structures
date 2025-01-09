<?php

namespace Sunaoka\Aws\Structures\NetworkManager\RejectAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Tag> $Tags
 * @property int $AttachmentPolicyRuleNumber
 * @property string $NetworkFunctionGroupName
 */
class ProposedNetworkFunctionGroupChange extends Shape
{
    /**
     * @param array{
     *     Tags?: list<Tag>,
     *     AttachmentPolicyRuleNumber?: int,
     *     NetworkFunctionGroupName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
