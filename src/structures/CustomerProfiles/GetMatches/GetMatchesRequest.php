<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetMatches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property string $DomainName
 */
class GetMatchesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     DomainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
