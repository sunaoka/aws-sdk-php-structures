<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListContextChanges\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContextId
 * @property string|null $ContextType
 * @property string|null $SegmentType
 * @property string|null $PublicId
 * @property string|null $Region
 * @property string|null $AvailabilityZone
 * @property string|null $AttachmentType
 */
class ContextEntry extends Shape
{
    /**
     * @param array{
     *     ContextId?: string|null,
     *     ContextType?: string|null,
     *     SegmentType?: string|null,
     *     PublicId?: string|null,
     *     Region?: string|null,
     *     AvailabilityZone?: string|null,
     *     AttachmentType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
