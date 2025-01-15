<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartContentModeration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Video $Video
 * @property float|null $MinConfidence
 * @property string|null $ClientRequestToken
 * @property Shapes\NotificationChannel|null $NotificationChannel
 * @property string|null $JobTag
 */
class StartContentModerationRequest extends Request
{
    /**
     * @param array{
     *     Video: Shapes\Video,
     *     MinConfidence?: float|null,
     *     ClientRequestToken?: string|null,
     *     NotificationChannel?: Shapes\NotificationChannel|null,
     *     JobTag?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
