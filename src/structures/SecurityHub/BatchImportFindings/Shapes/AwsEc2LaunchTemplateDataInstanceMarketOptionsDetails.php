<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MarketType
 * @property AwsEc2LaunchTemplateDataInstanceMarketOptionsSpotOptionsDetails $SpotOptions
 */
class AwsEc2LaunchTemplateDataInstanceMarketOptionsDetails extends Shape
{
    /**
     * @param array{
     *     MarketType?: string,
     *     SpotOptions?: AwsEc2LaunchTemplateDataInstanceMarketOptionsSpotOptionsDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
