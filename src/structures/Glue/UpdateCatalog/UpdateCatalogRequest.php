<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateCatalog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property Shapes\CatalogInput $CatalogInput
 */
class UpdateCatalogRequest extends Request
{
    /**
     * @param array{
     *     CatalogId: string,
     *     CatalogInput: Shapes\CatalogInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
