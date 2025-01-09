<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VALUE'|'CHILD'|'COMPLEX_FEATURES'|'MERGED_CELL'|'TITLE'|'ANSWER'|'TABLE'|'TABLE_TITLE'|'TABLE_FOOTER' $Type
 * @property list<string> $Ids
 */
class Relationship extends Shape
{
    /**
     * @param array{
     *     Type?: 'VALUE'|'CHILD'|'COMPLEX_FEATURES'|'MERGED_CELL'|'TITLE'|'ANSWER'|'TABLE'|'TABLE_TITLE'|'TABLE_FOOTER',
     *     Ids?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
