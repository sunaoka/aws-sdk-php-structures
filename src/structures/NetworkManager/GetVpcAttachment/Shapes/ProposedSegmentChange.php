<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetVpcAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Tag> $Tags
 * @property int $AttachmentPolicyRuleNumber
 * @property string $SegmentName
 */
class ProposedSegmentChange extends Shape
{
    /**
     * @param array{
     *     Tags?: list<Tag>,
     *     AttachmentPolicyRuleNumber?: int,
     *     SegmentName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
