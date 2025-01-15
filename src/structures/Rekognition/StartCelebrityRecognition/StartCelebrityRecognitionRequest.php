<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartCelebrityRecognition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Video $Video
 * @property string|null $ClientRequestToken
 * @property Shapes\NotificationChannel|null $NotificationChannel
 * @property string|null $JobTag
 */
class StartCelebrityRecognitionRequest extends Request
{
    /**
     * @param array{
     *     Video: Shapes\Video,
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
