<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListCalculatedAttributesForProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property string $DomainName
 * @property string $ProfileId
 */
class ListCalculatedAttributesForProfileRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     DomainName: string,
     *     ProfileId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
