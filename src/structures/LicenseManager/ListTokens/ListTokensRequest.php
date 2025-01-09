<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListTokens;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TokenIds
 * @property list<Shapes\Filter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListTokensRequest extends Request
{
    /**
     * @param array{
     *     TokenIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
