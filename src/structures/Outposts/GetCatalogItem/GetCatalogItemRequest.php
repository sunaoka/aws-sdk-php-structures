<?php

namespace Sunaoka\Aws\Structures\Outposts\GetCatalogItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogItemId
 */
class GetCatalogItemRequest extends Request
{
    /**
     * @param array{CatalogItemId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
