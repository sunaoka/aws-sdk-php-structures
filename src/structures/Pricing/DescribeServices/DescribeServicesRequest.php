<?php

namespace Sunaoka\Aws\Structures\Pricing\DescribeServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceCode
 * @property string $FormatVersion
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeServicesRequest extends Request
{
    /**
     * @param array{
     *     ServiceCode?: string,
     *     FormatVersion?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
