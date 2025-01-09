<?php

namespace Sunaoka\Aws\Structures\Outposts\ListCatalogItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property list<'RACK'|'SERVER'> $ItemClassFilter
 * @property list<'EBS'|'S3'> $SupportedStorageFilter
 * @property list<string> $EC2FamilyFilter
 */
class ListCatalogItemsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     ItemClassFilter?: list<'RACK'|'SERVER'>,
     *     SupportedStorageFilter?: list<'EBS'|'S3'>,
     *     EC2FamilyFilter?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
