<?php

namespace Sunaoka\Aws\Structures\Honeycode\StartTableDataImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DestinationOptions|null $destinationOptions
 * @property DelimitedTextImportOptions|null $delimitedTextOptions
 */
class ImportOptions extends Shape
{
    /**
     * @param array{
     *     destinationOptions?: DestinationOptions|null,
     *     delimitedTextOptions?: DelimitedTextImportOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
