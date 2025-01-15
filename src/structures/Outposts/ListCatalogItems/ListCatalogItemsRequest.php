<?php

namespace Sunaoka\Aws\Structures\Outposts\ListCatalogItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property list<'RACK'|'SERVER'>|null $ItemClassFilter
 * @property list<'EBS'|'S3'>|null $SupportedStorageFilter
 * @property list<string>|null $EC2FamilyFilter
 */
class ListCatalogItemsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     ItemClassFilter?: list<'RACK'|'SERVER'>|null,
     *     SupportedStorageFilter?: list<'EBS'|'S3'>|null,
     *     EC2FamilyFilter?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
