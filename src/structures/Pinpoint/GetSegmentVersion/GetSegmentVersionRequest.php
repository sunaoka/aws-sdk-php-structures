<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegmentVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $SegmentId
 * @property string $Version
 */
class GetSegmentVersionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     SegmentId: string,
     *     Version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
