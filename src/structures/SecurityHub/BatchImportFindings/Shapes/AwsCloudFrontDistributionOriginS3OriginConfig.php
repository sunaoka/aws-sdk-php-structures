<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OriginAccessIdentity
 */
class AwsCloudFrontDistributionOriginS3OriginConfig extends Shape
{
    /**
     * @param array{OriginAccessIdentity?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
