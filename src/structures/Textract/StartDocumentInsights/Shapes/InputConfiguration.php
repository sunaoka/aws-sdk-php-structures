<?php

namespace Sunaoka\Aws\Structures\Textract\StartDocumentInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 */
class InputConfiguration extends Shape
{
    /**
     * @param array{S3Uri: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
