<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeEntity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectionName
 * @property string $CatalogId
 * @property string $EntityName
 * @property string $NextToken
 * @property string $DataStoreApiVersion
 */
class DescribeEntityRequest extends Request
{
    /**
     * @param array{
     *     ConnectionName: string,
     *     CatalogId?: string,
     *     EntityName: string,
     *     NextToken?: string,
     *     DataStoreApiVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
