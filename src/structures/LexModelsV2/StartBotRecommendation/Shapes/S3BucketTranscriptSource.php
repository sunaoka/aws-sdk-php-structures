<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartBotRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3BucketName
 * @property PathFormat|null $pathFormat
 * @property 'Lex' $transcriptFormat
 * @property TranscriptFilter|null $transcriptFilter
 * @property string|null $kmsKeyArn
 */
class S3BucketTranscriptSource extends Shape
{
    /**
     * @param array{
     *     s3BucketName: string,
     *     pathFormat?: PathFormat|null,
     *     transcriptFormat: 'Lex',
     *     transcriptFilter?: TranscriptFilter|null,
     *     kmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
