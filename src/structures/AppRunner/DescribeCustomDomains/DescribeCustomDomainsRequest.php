<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeCustomDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceArn
 * @property string $NextToken
 * @property int<1, 5> $MaxResults
 */
class DescribeCustomDomainsRequest extends Request
{
    /**
     * @param array{
     *     ServiceArn: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 5>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
