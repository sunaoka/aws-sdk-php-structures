<?php

namespace Sunaoka\Aws\Structures\Pricing\DescribeServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ServiceCode
 * @property string|null $FormatVersion
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeServicesRequest extends Request
{
    /**
     * @param array{
     *     ServiceCode?: string|null,
     *     FormatVersion?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
