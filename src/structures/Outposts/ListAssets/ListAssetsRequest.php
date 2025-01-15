<?php

namespace Sunaoka\Aws\Structures\Outposts\ListAssets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostIdentifier
 * @property list<string>|null $HostIdFilter
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property list<'ACTIVE'|'RETIRING'|'ISOLATED'>|null $StatusFilter
 */
class ListAssetsRequest extends Request
{
    /**
     * @param array{
     *     OutpostIdentifier: string,
     *     HostIdFilter?: list<string>|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     StatusFilter?: list<'ACTIVE'|'RETIRING'|'ISOLATED'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
