<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateSegment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property Shapes\WriteSegmentRequest $WriteSegmentRequest
 */
class CreateSegmentRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     WriteSegmentRequest: Shapes\WriteSegmentRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
