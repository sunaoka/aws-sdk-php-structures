<?php

namespace Sunaoka\Aws\Structures\Athena\GetDataCatalog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $WorkGroup
 */
class GetDataCatalogRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     WorkGroup?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
