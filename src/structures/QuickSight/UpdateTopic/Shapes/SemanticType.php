<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TypeName
 * @property string|null $SubTypeName
 * @property array<string, string>|null $TypeParameters
 * @property string|null $TruthyCellValue
 * @property list<string>|null $TruthyCellValueSynonyms
 * @property string|null $FalseyCellValue
 * @property list<string>|null $FalseyCellValueSynonyms
 */
class SemanticType extends Shape
{
    /**
     * @param array{
     *     TypeName?: string|null,
     *     SubTypeName?: string|null,
     *     TypeParameters?: array<string, string>|null,
     *     TruthyCellValue?: string|null,
     *     TruthyCellValueSynonyms?: list<string>|null,
     *     FalseyCellValue?: string|null,
     *     FalseyCellValueSynonyms?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
