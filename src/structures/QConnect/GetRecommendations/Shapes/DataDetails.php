<?php

namespace Sunaoka\Aws\Structures\QConnect\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContentDataDetails $contentData
 * @property GenerativeDataDetails $generativeData
 * @property IntentDetectedDataDetails $intentDetectedData
 * @property SourceContentDataDetails $sourceContentData
 */
class DataDetails extends Shape
{
    /**
     * @param array{
     *     contentData?: ContentDataDetails,
     *     generativeData?: GenerativeDataDetails,
     *     intentDetectedData?: IntentDetectedDataDetails,
     *     sourceContentData?: SourceContentDataDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
