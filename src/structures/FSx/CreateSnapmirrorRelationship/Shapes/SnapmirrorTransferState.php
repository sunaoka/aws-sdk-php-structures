<?php

namespace Sunaoka\Aws\Structures\FSx\CreateSnapmirrorRelationship\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $State
 * @property string|null $Type
 * @property int<0, max>|null $BytesTransferred
 * @property string|null $Duration
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class SnapmirrorTransferState extends Shape
{
    /**
     * @param array{
     *     State?: string|null,
     *     Type?: string|null,
     *     BytesTransferred?: int<0, max>|null,
     *     Duration?: string|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
