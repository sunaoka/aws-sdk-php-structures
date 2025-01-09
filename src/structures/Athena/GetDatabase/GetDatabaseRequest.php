<?php

namespace Sunaoka\Aws\Structures\Athena\GetDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogName
 * @property string $DatabaseName
 * @property string $WorkGroup
 */
class GetDatabaseRequest extends Request
{
    /**
     * @param array{
     *     CatalogName: string,
     *     DatabaseName: string,
     *     WorkGroup?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
