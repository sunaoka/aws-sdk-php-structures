<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeAggregationAuthorizations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 100>|null $Limit
 * @property string|null $NextToken
 */
class DescribeAggregationAuthorizationsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
