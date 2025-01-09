<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationAggregators;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ConfigurationAggregatorNames
 * @property string $NextToken
 * @property int $Limit
 */
class DescribeConfigurationAggregatorsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationAggregatorNames?: list<string>,
     *     NextToken?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
