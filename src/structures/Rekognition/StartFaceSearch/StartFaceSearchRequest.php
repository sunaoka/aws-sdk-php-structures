<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartFaceSearch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Video $Video
 * @property string|null $ClientRequestToken
 * @property float|null $FaceMatchThreshold
 * @property string $CollectionId
 * @property Shapes\NotificationChannel|null $NotificationChannel
 * @property string|null $JobTag
 */
class StartFaceSearchRequest extends Request
{
    /**
     * @param array{
     *     Video: Shapes\Video,
     *     ClientRequestToken?: string|null,
     *     FaceMatchThreshold?: float|null,
     *     CollectionId: string,
     *     NotificationChannel?: Shapes\NotificationChannel|null,
     *     JobTag?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
