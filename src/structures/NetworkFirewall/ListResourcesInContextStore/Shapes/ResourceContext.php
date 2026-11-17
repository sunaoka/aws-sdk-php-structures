<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListResourcesInContextStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ResourceId'|'SegmentId'|'Subnet'|'Attachment'|null $ContextType
 * @property string|null $Region
 * @property string|null $AvailabilityZone
 * @property string|null $AttachmentType
 * @property string $PublicId
 */
class ResourceContext extends Shape
{
    /**
     * @param array{
     *     ContextType?: 'ResourceId'|'SegmentId'|'Subnet'|'Attachment'|null,
     *     Region?: string|null,
     *     AvailabilityZone?: string|null,
     *     AttachmentType?: string|null,
     *     PublicId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
