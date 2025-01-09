<?php

namespace Sunaoka\Aws\Structures\Translate\ListTextTranslationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property EncryptionKey $EncryptionKey
 */
class OutputDataConfig extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     EncryptionKey?: EncryptionKey
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
