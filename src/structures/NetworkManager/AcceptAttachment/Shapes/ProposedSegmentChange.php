<?php

namespace Sunaoka\Aws\Structures\NetworkManager\AcceptAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Tag>|null $Tags
 * @property int|null $AttachmentPolicyRuleNumber
 * @property string|null $SegmentName
 */
class ProposedSegmentChange extends Shape
{
    /**
     * @param array{
     *     Tags?: list<Tag>|null,
     *     AttachmentPolicyRuleNumber?: int|null,
     *     SegmentName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
