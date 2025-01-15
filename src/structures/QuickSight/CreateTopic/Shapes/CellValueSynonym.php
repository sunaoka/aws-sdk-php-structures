<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CellValue
 * @property list<string>|null $Synonyms
 */
class CellValueSynonym extends Shape
{
    /**
     * @param array{
     *     CellValue?: string|null,
     *     Synonyms?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
