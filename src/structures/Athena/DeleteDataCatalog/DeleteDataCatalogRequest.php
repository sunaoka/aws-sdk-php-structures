<?php

namespace Sunaoka\Aws\Structures\Athena\DeleteDataCatalog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property bool $DeleteCatalogOnly
 */
class DeleteDataCatalogRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DeleteCatalogOnly?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
