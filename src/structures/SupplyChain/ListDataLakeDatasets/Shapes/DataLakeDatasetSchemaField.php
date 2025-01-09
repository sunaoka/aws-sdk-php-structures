<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListDataLakeDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'INT'|'DOUBLE'|'STRING'|'TIMESTAMP' $type
 * @property bool $isRequired
 */
class DataLakeDatasetSchemaField extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'INT'|'DOUBLE'|'STRING'|'TIMESTAMP',
     *     isRequired: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
