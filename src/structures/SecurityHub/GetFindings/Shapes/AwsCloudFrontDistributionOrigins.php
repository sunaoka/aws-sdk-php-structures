<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsCloudFrontDistributionOriginItem>|null $Items
 */
class AwsCloudFrontDistributionOrigins extends Shape
{
    /**
     * @param array{Items?: list<AwsCloudFrontDistributionOriginItem>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
