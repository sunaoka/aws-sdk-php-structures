<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TypeName
 * @property string $SubTypeName
 * @property array<string, string> $TypeParameters
 * @property string $TruthyCellValue
 * @property list<string> $TruthyCellValueSynonyms
 * @property string $FalseyCellValue
 * @property list<string> $FalseyCellValueSynonyms
 */
class SemanticType extends Shape
{
    /**
     * @param array{
     *     TypeName?: string,
     *     SubTypeName?: string,
     *     TypeParameters?: array<string, string>,
     *     TruthyCellValue?: string,
     *     TruthyCellValueSynonyms?: list<string>,
     *     FalseyCellValue?: string,
     *     FalseyCellValueSynonyms?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
