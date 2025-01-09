<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationAggregators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AccountIds
 * @property bool $AllAwsRegions
 * @property list<string> $AwsRegions
 */
class AccountAggregationSource extends Shape
{
    /**
     * @param array{
     *     AccountIds: list<string>,
     *     AllAwsRegions?: bool,
     *     AwsRegions?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
