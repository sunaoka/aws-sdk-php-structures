<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, SemanticTable>|null $TableMap
 * @property list<DataSetSemanticMetadata>|null $SemanticMetadata
 */
class SemanticModelConfiguration extends Shape
{
    /**
     * @param array{
     *     TableMap?: array<string, SemanticTable>|null,
     *     SemanticMetadata?: list<DataSetSemanticMetadata>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
