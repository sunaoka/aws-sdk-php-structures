<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartFaceDetection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Video $Video
 * @property string $ClientRequestToken
 * @property Shapes\NotificationChannel $NotificationChannel
 * @property 'DEFAULT'|'ALL' $FaceAttributes
 * @property string $JobTag
 */
class StartFaceDetectionRequest extends Request
{
    /**
     * @param array{
     *     Video: Shapes\Video,
     *     ClientRequestToken?: string,
     *     NotificationChannel?: Shapes\NotificationChannel,
     *     FaceAttributes?: 'DEFAULT'|'ALL',
     *     JobTag?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
