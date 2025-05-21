<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $mediaId
 * @property string|null $mediaMimeType
 * @property int|null $startTimeMilliseconds
 * @property int|null $endTimeMilliseconds
 * @property 'TRANSCRIPT'|'SUMMARY'|null $videoExtractionType
 */
class VideoSourceDetails extends Shape
{
    /**
     * @param array{
     *     mediaId?: string|null,
     *     mediaMimeType?: string|null,
     *     startTimeMilliseconds?: int|null,
     *     endTimeMilliseconds?: int|null,
     *     videoExtractionType?: 'TRANSCRIPT'|'SUMMARY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
