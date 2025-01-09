<?php

namespace Sunaoka\Aws\Structures\Glue\GetEntityRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectionName
 * @property string $CatalogId
 * @property string $EntityName
 * @property string $NextToken
 * @property string $DataStoreApiVersion
 * @property array<string, string> $ConnectionOptions
 * @property string $FilterPredicate
 * @property int<1, 1000> $Limit
 * @property string $OrderBy
 * @property list<string> $SelectedFields
 */
class GetEntityRecordsRequest extends Request
{
    /**
     * @param array{
     *     ConnectionName?: string,
     *     CatalogId?: string,
     *     EntityName: string,
     *     NextToken?: string,
     *     DataStoreApiVersion?: string,
     *     ConnectionOptions?: array<string, string>,
     *     FilterPredicate?: string,
     *     Limit: int<1, 1000>,
     *     OrderBy?: string,
     *     SelectedFields?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
