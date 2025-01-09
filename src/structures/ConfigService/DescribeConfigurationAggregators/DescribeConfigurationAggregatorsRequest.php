<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationAggregators;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ConfigurationAggregatorNames
 * @property string $NextToken
 * @property int<0, 100> $Limit
 */
class DescribeConfigurationAggregatorsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationAggregatorNames?: list<string>,
     *     NextToken?: string,
     *     Limit?: int<0, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
