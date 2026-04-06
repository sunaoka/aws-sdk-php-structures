<?php

namespace Sunaoka\Aws\Structures\Notifications\GetNotificationEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $mediaId
 * @property 'IMAGE' $type
 * @property string $url
 * @property string $caption
 */
class MediaElement extends Shape
{
    /**
     * @param array{
     *     mediaId: string,
     *     type: 'IMAGE',
     *     url: string,
     *     caption: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
