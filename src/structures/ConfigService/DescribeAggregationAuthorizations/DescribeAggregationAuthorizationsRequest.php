<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeAggregationAuthorizations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $Limit
 * @property string $NextToken
 */
class DescribeAggregationAuthorizationsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
