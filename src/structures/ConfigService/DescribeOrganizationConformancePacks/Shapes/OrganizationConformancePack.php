<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeOrganizationConformancePacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OrganizationConformancePackName
 * @property string $OrganizationConformancePackArn
 * @property string|null $DeliveryS3Bucket
 * @property string|null $DeliveryS3KeyPrefix
 * @property list<ConformancePackInputParameter>|null $ConformancePackInputParameters
 * @property list<string>|null $ExcludedAccounts
 * @property \Aws\Api\DateTimeResult $LastUpdateTime
 */
class OrganizationConformancePack extends Shape
{
    /**
     * @param array{
     *     OrganizationConformancePackName: string,
     *     OrganizationConformancePackArn: string,
     *     DeliveryS3Bucket?: string|null,
     *     DeliveryS3KeyPrefix?: string|null,
     *     ConformancePackInputParameters?: list<ConformancePackInputParameter>|null,
     *     ExcludedAccounts?: list<string>|null,
     *     LastUpdateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
