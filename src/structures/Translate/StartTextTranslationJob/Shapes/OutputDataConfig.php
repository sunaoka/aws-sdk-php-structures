<?php

namespace Sunaoka\Aws\Structures\Translate\StartTextTranslationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property EncryptionKey|null $EncryptionKey
 */
class OutputDataConfig extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     EncryptionKey?: EncryptionKey|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
