<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContentDataDetails|null $contentData
 * @property GenerativeDataDetails|null $generativeData
 * @property IntentDetectedDataDetails|null $intentDetectedData
 * @property SourceContentDataDetails|null $sourceContentData
 */
class DataDetails extends Shape
{
    /**
     * @param array{
     *     contentData?: ContentDataDetails|null,
     *     generativeData?: GenerativeDataDetails|null,
     *     intentDetectedData?: IntentDetectedDataDetails|null,
     *     sourceContentData?: SourceContentDataDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
