<?php

namespace Sunaoka\Aws\Structures\Translate\StartTextTranslationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property string $ContentType
 */
class InputDataConfig extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     ContentType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
