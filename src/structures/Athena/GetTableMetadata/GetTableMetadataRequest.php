<?php

namespace Sunaoka\Aws\Structures\Athena\GetTableMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogName
 * @property string $DatabaseName
 * @property string $TableName
 * @property string|null $WorkGroup
 */
class GetTableMetadataRequest extends Request
{
    /**
     * @param array{
     *     CatalogName: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     WorkGroup?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
