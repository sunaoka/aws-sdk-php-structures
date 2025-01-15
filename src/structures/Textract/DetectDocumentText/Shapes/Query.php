<?php

namespace Sunaoka\Aws\Structures\Textract\DetectDocumentText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Text
 * @property string|null $Alias
 * @property list<string>|null $Pages
 */
class Query extends Shape
{
    /**
     * @param array{
     *     Text: string,
     *     Alias?: string|null,
     *     Pages?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
