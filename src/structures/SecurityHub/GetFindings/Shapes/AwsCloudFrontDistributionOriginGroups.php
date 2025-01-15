<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsCloudFrontDistributionOriginGroup>|null $Items
 */
class AwsCloudFrontDistributionOriginGroups extends Shape
{
    /**
     * @param array{Items?: list<AwsCloudFrontDistributionOriginGroup>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
