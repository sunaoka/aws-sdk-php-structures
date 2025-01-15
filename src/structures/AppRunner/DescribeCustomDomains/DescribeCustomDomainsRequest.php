<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeCustomDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceArn
 * @property string|null $NextToken
 * @property int<1, 5>|null $MaxResults
 */
class DescribeCustomDomainsRequest extends Request
{
    /**
     * @param array{
     *     ServiceArn: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 5>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
