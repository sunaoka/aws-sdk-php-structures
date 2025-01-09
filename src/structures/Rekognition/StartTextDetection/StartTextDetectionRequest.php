<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartTextDetection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Video $Video
 * @property string $ClientRequestToken
 * @property Shapes\NotificationChannel $NotificationChannel
 * @property string $JobTag
 * @property Shapes\StartTextDetectionFilters $Filters
 */
class StartTextDetectionRequest extends Request
{
    /**
     * @param array{
     *     Video: Shapes\Video,
     *     ClientRequestToken?: string,
     *     NotificationChannel?: Shapes\NotificationChannel,
     *     JobTag?: string,
     *     Filters?: Shapes\StartTextDetectionFilters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
