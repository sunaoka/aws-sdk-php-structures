<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationAggregators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property list<string>|null $AwsRegions
 * @property bool|null $AllAwsRegions
 */
class OrganizationAggregationSource extends Shape
{
    /**
     * @param array{
     *     RoleArn: string,
     *     AwsRegions?: list<string>|null,
     *     AllAwsRegions?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
