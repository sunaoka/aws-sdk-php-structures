<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartPiiEntitiesDetectionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property 'ONE_DOC_PER_FILE'|'ONE_DOC_PER_LINE'|null $InputFormat
 * @property DocumentReaderConfig|null $DocumentReaderConfig
 */
class InputDataConfig extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     InputFormat?: 'ONE_DOC_PER_FILE'|'ONE_DOC_PER_LINE'|null,
     *     DocumentReaderConfig?: DocumentReaderConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
