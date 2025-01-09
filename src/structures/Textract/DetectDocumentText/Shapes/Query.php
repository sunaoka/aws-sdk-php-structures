<?php

namespace Sunaoka\Aws\Structures\Textract\DetectDocumentText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Text
 * @property string $Alias
 * @property list<string> $Pages
 */
class Query extends Shape
{
    /**
     * @param array{
     *     Text: string,
     *     Alias?: string,
     *     Pages?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
