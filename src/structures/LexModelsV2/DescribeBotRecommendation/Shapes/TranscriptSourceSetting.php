<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3BucketTranscriptSource|null $s3BucketTranscriptSource
 */
class TranscriptSourceSetting extends Shape
{
    /**
     * @param array{s3BucketTranscriptSource?: S3BucketTranscriptSource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
