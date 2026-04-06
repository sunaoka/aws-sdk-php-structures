<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $DataLakeAccess
 * @property string|null $DataTransferRole
 * @property string|null $KmsKey
 * @property string|null $CatalogType
 */
class DataLakeAccessProperties extends Shape
{
    /**
     * @param array{
     *     DataLakeAccess?: bool|null,
     *     DataTransferRole?: string|null,
     *     KmsKey?: string|null,
     *     CatalogType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
