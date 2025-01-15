<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MarketType
 * @property AwsEc2LaunchTemplateDataInstanceMarketOptionsSpotOptionsDetails|null $SpotOptions
 */
class AwsEc2LaunchTemplateDataInstanceMarketOptionsDetails extends Shape
{
    /**
     * @param array{
     *     MarketType?: string|null,
     *     SpotOptions?: AwsEc2LaunchTemplateDataInstanceMarketOptionsSpotOptionsDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
