<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartCelebrityRecognition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Video $Video
 * @property string $ClientRequestToken
 * @property Shapes\NotificationChannel $NotificationChannel
 * @property string $JobTag
 */
class StartCelebrityRecognitionRequest extends Request
{
    /**
     * @param array{
     *     Video: Shapes\Video,
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
