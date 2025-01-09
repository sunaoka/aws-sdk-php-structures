<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $DataLakeAccess
 * @property string $DataTransferRole
 * @property string $KmsKey
 * @property string $CatalogType
 */
class DataLakeAccessProperties extends Shape
{
    /**
     * @param array{
     *     DataLakeAccess?: bool,
     *     DataTransferRole?: string,
     *     KmsKey?: string,
     *     CatalogType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
