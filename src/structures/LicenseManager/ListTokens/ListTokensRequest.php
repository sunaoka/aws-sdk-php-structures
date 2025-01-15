<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListTokens;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $TokenIds
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListTokensRequest extends Request
{
    /**
     * @param array{
     *     TokenIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
