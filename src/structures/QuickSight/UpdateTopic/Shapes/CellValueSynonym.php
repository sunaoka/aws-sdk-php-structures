<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CellValue
 * @property list<string> $Synonyms
 */
class CellValueSynonym extends Shape
{
    /**
     * @param array{
     *     CellValue?: string,
     *     Synonyms?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
