<?php

namespace Sunaoka\Aws\Structures\Textract\GetDocumentTextDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VALUE'|'CHILD'|'COMPLEX_FEATURES'|'MERGED_CELL'|'TITLE'|'ANSWER'|'TABLE'|'TABLE_TITLE'|'TABLE_FOOTER'|null $Type
 * @property list<string>|null $Ids
 */
class Relationship extends Shape
{
    /**
     * @param array{
     *     Type?: 'VALUE'|'CHILD'|'COMPLEX_FEATURES'|'MERGED_CELL'|'TITLE'|'ANSWER'|'TABLE'|'TABLE_TITLE'|'TABLE_FOOTER'|null,
     *     Ids?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
