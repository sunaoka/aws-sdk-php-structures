<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $mediaId
 * @property string|null $mediaMimeType
 * @property int|null $startTimeMilliseconds
 * @property int|null $endTimeMilliseconds
 * @property 'TRANSCRIPT'|'SUMMARY'|null $audioExtractionType
 */
class AudioSourceDetails extends Shape
{
    /**
     * @param array{
     *     mediaId?: string|null,
     *     mediaMimeType?: string|null,
     *     startTimeMilliseconds?: int|null,
     *     endTimeMilliseconds?: int|null,
     *     audioExtractionType?: 'TRANSCRIPT'|'SUMMARY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
