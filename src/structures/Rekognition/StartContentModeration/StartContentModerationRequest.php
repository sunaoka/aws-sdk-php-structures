<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartContentModeration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Video $Video
 * @property float $MinConfidence
 * @property string $ClientRequestToken
 * @property Shapes\NotificationChannel $NotificationChannel
 * @property string $JobTag
 */
class StartContentModerationRequest extends Request
{
    /**
     * @param array{
     *     Video: Shapes\Video,
     *     MinConfidence?: float,
     *     ClientRequestToken?: string,
     *     NotificationChannel?: Shapes\NotificationChannel,
     *     JobTag?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
