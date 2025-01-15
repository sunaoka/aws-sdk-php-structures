<?php

namespace Sunaoka\Aws\Structures\Glue\GetEntityRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ConnectionName
 * @property string|null $CatalogId
 * @property string $EntityName
 * @property string|null $NextToken
 * @property string|null $DataStoreApiVersion
 * @property array<string, string>|null $ConnectionOptions
 * @property string|null $FilterPredicate
 * @property int<1, 1000> $Limit
 * @property string|null $OrderBy
 * @property list<string>|null $SelectedFields
 */
class GetEntityRecordsRequest extends Request
{
    /**
     * @param array{
     *     ConnectionName?: string|null,
     *     CatalogId?: string|null,
     *     EntityName: string,
     *     NextToken?: string|null,
     *     DataStoreApiVersion?: string|null,
     *     ConnectionOptions?: array<string, string>|null,
     *     FilterPredicate?: string|null,
     *     Limit: int<1, 1000>,
     *     OrderBy?: string|null,
     *     SelectedFields?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
