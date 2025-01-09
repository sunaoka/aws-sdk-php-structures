<?php

namespace Sunaoka\Aws\Structures\Athena\GetDataCatalog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $WorkGroup
 */
class GetDataCatalogRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     WorkGroup?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
