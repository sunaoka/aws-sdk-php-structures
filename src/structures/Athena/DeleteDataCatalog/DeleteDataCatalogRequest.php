<?php

namespace Sunaoka\Aws\Structures\Athena\DeleteDataCatalog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property bool|null $DeleteCatalogOnly
 */
class DeleteDataCatalogRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DeleteCatalogOnly?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
