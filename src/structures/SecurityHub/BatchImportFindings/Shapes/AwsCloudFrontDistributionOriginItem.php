<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainName
 * @property string|null $Id
 * @property string|null $OriginPath
 * @property AwsCloudFrontDistributionOriginS3OriginConfig|null $S3OriginConfig
 * @property AwsCloudFrontDistributionOriginCustomOriginConfig|null $CustomOriginConfig
 */
class AwsCloudFrontDistributionOriginItem extends Shape
{
    /**
     * @param array{
     *     DomainName?: string|null,
     *     Id?: string|null,
     *     OriginPath?: string|null,
     *     S3OriginConfig?: AwsCloudFrontDistributionOriginS3OriginConfig|null,
     *     CustomOriginConfig?: AwsCloudFrontDistributionOriginCustomOriginConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
