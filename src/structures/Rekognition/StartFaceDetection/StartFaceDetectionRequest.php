<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartFaceDetection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Video $Video
 * @property string|null $ClientRequestToken
 * @property Shapes\NotificationChannel|null $NotificationChannel
 * @property 'DEFAULT'|'ALL'|null $FaceAttributes
 * @property string|null $JobTag
 */
class StartFaceDetectionRequest extends Request
{
    /**
     * @param array{
     *     Video: Shapes\Video,
     *     ClientRequestToken?: string|null,
     *     NotificationChannel?: Shapes\NotificationChannel|null,
     *     FaceAttributes?: 'DEFAULT'|'ALL'|null,
     *     JobTag?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
