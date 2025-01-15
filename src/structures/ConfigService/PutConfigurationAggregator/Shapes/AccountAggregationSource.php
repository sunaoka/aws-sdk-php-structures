<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConfigurationAggregator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AccountIds
 * @property bool|null $AllAwsRegions
 * @property list<string>|null $AwsRegions
 */
class AccountAggregationSource extends Shape
{
    /**
     * @param array{
     *     AccountIds: list<string>,
     *     AllAwsRegions?: bool|null,
     *     AwsRegions?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
