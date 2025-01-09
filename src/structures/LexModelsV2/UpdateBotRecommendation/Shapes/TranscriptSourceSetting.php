<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3BucketTranscriptSource $s3BucketTranscriptSource
 */
class TranscriptSourceSetting extends Shape
{
    /**
     * @param array{s3BucketTranscriptSource?: S3BucketTranscriptSource} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
