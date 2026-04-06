<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListObjectTypeAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string $DomainName
 * @property string $ObjectTypeName
 */
class ListObjectTypeAttributesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     DomainName: string,
     *     ObjectTypeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
