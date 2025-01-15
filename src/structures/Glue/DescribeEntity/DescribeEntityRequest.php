<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeEntity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectionName
 * @property string|null $CatalogId
 * @property string $EntityName
 * @property string|null $NextToken
 * @property string|null $DataStoreApiVersion
 */
class DescribeEntityRequest extends Request
{
    /**
     * @param array{
     *     ConnectionName: string,
     *     CatalogId?: string|null,
     *     EntityName: string,
     *     NextToken?: string|null,
     *     DataStoreApiVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
