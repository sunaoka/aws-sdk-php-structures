<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartFaceSearch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Video $Video
 * @property string $ClientRequestToken
 * @property float $FaceMatchThreshold
 * @property string $CollectionId
 * @property Shapes\NotificationChannel $NotificationChannel
 * @property string $JobTag
 */
class StartFaceSearchRequest extends Request
{
    /**
     * @param array{
     *     Video: Shapes\Video,
     *     ClientRequestToken?: string,
     *     FaceMatchThreshold?: float,
     *     CollectionId: string,
     *     NotificationChannel?: Shapes\NotificationChannel,
     *     JobTag?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
