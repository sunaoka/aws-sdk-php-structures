<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListObjectTypeAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $DomainName
 * @property string $ObjectTypeName
 */
class ListObjectTypeAttributesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     DomainName: string,
     *     ObjectTypeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
