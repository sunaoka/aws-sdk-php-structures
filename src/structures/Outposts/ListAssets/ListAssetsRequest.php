<?php

namespace Sunaoka\Aws\Structures\Outposts\ListAssets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostIdentifier
 * @property list<string> $HostIdFilter
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 * @property list<'ACTIVE'|'RETIRING'|'ISOLATED'> $StatusFilter
 */
class ListAssetsRequest extends Request
{
    /**
     * @param array{
     *     OutpostIdentifier: string,
     *     HostIdFilter?: list<string>,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string,
     *     StatusFilter?: list<'ACTIVE'|'RETIRING'|'ISOLATED'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
