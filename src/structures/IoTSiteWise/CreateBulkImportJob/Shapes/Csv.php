<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateBulkImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'ALIAS'|'ASSET_ID'|'PROPERTY_ID'|'DATA_TYPE'|'TIMESTAMP_SECONDS'|'TIMESTAMP_NANO_OFFSET'|'QUALITY'|'VALUE'> $columnNames
 */
class Csv extends Shape
{
    /**
     * @param array{columnNames: list<'ALIAS'|'ASSET_ID'|'PROPERTY_ID'|'DATA_TYPE'|'TIMESTAMP_SECONDS'|'TIMESTAMP_NANO_OFFSET'|'QUALITY'|'VALUE'>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
