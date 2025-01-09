<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3BucketName
 * @property PathFormat $pathFormat
 * @property 'Lex' $transcriptFormat
 * @property TranscriptFilter $transcriptFilter
 * @property string $kmsKeyArn
 */
class S3BucketTranscriptSource extends Shape
{
    /**
     * @param array{
     *     s3BucketName: string,
     *     pathFormat?: PathFormat,
     *     transcriptFormat: 'Lex',
     *     transcriptFilter?: TranscriptFilter,
     *     kmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
