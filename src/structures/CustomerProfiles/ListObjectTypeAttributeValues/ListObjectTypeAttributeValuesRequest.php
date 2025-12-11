<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListObjectTypeAttributeValues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string $DomainName
 * @property string $ObjectTypeName
 * @property string $AttributeName
 */
class ListObjectTypeAttributeValuesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     DomainName: string,
     *     ObjectTypeName: string,
     *     AttributeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
