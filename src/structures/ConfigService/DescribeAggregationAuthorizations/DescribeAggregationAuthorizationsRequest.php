<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeAggregationAuthorizations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 100> $Limit
 * @property string $NextToken
 */
class DescribeAggregationAuthorizationsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int<0, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
