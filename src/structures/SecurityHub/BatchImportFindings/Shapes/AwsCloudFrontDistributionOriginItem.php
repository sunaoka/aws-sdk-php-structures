<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property string $Id
 * @property string $OriginPath
 * @property AwsCloudFrontDistributionOriginS3OriginConfig $S3OriginConfig
 * @property AwsCloudFrontDistributionOriginCustomOriginConfig $CustomOriginConfig
 */
class AwsCloudFrontDistributionOriginItem extends Shape
{
    /**
     * @param array{
     *     DomainName?: string,
     *     Id?: string,
     *     OriginPath?: string,
     *     S3OriginConfig?: AwsCloudFrontDistributionOriginS3OriginConfig,
     *     CustomOriginConfig?: AwsCloudFrontDistributionOriginCustomOriginConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
