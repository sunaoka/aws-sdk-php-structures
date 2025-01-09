<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeID;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Document> $DocumentPages
 */
class AnalyzeIDRequest extends Request
{
    /**
     * @param array{DocumentPages: list<Shapes\Document>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
