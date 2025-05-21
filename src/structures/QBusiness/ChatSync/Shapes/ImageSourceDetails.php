<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $mediaId
 * @property string|null $mediaMimeType
 */
class ImageSourceDetails extends Shape
{
    /**
     * @param array{
     *     mediaId?: string|null,
     *     mediaMimeType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
