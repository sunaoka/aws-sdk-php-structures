<?php

namespace Sunaoka\Aws\Structures\Textract\StartDocumentAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AdapterId
 * @property list<string> $Pages
 * @property string $Version
 */
class Adapter extends Shape
{
    /**
     * @param array{
     *     AdapterId: string,
     *     Pages?: list<string>,
     *     Version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
