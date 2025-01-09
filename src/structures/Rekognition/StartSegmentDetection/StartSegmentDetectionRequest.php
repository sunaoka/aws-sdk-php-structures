<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartSegmentDetection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Video $Video
 * @property string $ClientRequestToken
 * @property Shapes\NotificationChannel $NotificationChannel
 * @property string $JobTag
 * @property Shapes\StartSegmentDetectionFilters $Filters
 * @property list<'TECHNICAL_CUE'|'SHOT'> $SegmentTypes
 */
class StartSegmentDetectionRequest extends Request
{
    /**
     * @param array{
     *     Video: Shapes\Video,
     *     ClientRequestToken?: string,
     *     NotificationChannel?: Shapes\NotificationChannel,
     *     JobTag?: string,
     *     Filters?: Shapes\StartSegmentDetectionFilters,
     *     SegmentTypes: list<'TECHNICAL_CUE'|'SHOT'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
