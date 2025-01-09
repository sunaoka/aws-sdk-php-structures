<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeOrganizationConformancePacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OrganizationConformancePackName
 * @property string $OrganizationConformancePackArn
 * @property string $DeliveryS3Bucket
 * @property string $DeliveryS3KeyPrefix
 * @property list<ConformancePackInputParameter> $ConformancePackInputParameters
 * @property list<string> $ExcludedAccounts
 * @property \Aws\Api\DateTimeResult $LastUpdateTime
 */
class OrganizationConformancePack extends Shape
{
    /**
     * @param array{
     *     OrganizationConformancePackName: string,
     *     OrganizationConformancePackArn: string,
     *     DeliveryS3Bucket?: string,
     *     DeliveryS3KeyPrefix?: string,
     *     ConformancePackInputParameters?: list<ConformancePackInputParameter>,
     *     ExcludedAccounts?: list<string>,
     *     LastUpdateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
