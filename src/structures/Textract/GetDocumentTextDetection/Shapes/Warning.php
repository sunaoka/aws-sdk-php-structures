<?php

namespace Sunaoka\Aws\Structures\Textract\GetDocumentTextDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorCode
 * @property list<int<0, max>> $Pages
 */
class Warning extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: string,
     *     Pages?: list<int<0, max>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
