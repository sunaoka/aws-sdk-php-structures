<?php

namespace Sunaoka\Aws\Structures\Glue\GetDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $Name
 */
class GetDatabaseRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
