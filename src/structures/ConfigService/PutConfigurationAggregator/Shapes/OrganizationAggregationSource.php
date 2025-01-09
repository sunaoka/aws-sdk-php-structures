<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConfigurationAggregator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property list<string> $AwsRegions
 * @property bool $AllAwsRegions
 */
class OrganizationAggregationSource extends Shape
{
    /**
     * @param array{
     *     RoleArn: string,
     *     AwsRegions?: list<string>,
     *     AllAwsRegions?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
