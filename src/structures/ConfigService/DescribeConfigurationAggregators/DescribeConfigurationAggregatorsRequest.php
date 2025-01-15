<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationAggregators;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ConfigurationAggregatorNames
 * @property string|null $NextToken
 * @property int<0, 100>|null $Limit
 */
class DescribeConfigurationAggregatorsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationAggregatorNames?: list<string>|null,
     *     NextToken?: string|null,
     *     Limit?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
