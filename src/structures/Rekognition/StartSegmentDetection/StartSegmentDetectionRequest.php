<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartSegmentDetection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Video $Video
 * @property string|null $ClientRequestToken
 * @property Shapes\NotificationChannel|null $NotificationChannel
 * @property string|null $JobTag
 * @property Shapes\StartSegmentDetectionFilters|null $Filters
 * @property list<'TECHNICAL_CUE'|'SHOT'> $SegmentTypes
 */
class StartSegmentDetectionRequest extends Request
{
    /**
     * @param array{
     *     Video: Shapes\Video,
     *     ClientRequestToken?: string|null,
     *     NotificationChannel?: Shapes\NotificationChannel|null,
     *     JobTag?: string|null,
     *     Filters?: Shapes\StartSegmentDetectionFilters|null,
     *     SegmentTypes: list<'TECHNICAL_CUE'|'SHOT'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
