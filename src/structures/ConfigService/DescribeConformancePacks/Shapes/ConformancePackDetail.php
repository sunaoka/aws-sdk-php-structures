<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConformancePacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConformancePackName
 * @property string $ConformancePackArn
 * @property string $ConformancePackId
 * @property string $DeliveryS3Bucket
 * @property string $DeliveryS3KeyPrefix
 * @property list<ConformancePackInputParameter> $ConformancePackInputParameters
 * @property \Aws\Api\DateTimeResult $LastUpdateRequestedTime
 * @property string $CreatedBy
 * @property TemplateSSMDocumentDetails $TemplateSSMDocumentDetails
 */
class ConformancePackDetail extends Shape
{
    /**
     * @param array{
     *     ConformancePackName: string,
     *     ConformancePackArn: string,
     *     ConformancePackId: string,
     *     DeliveryS3Bucket?: string,
     *     DeliveryS3KeyPrefix?: string,
     *     ConformancePackInputParameters?: list<ConformancePackInputParameter>,
     *     LastUpdateRequestedTime?: \Aws\Api\DateTimeResult,
     *     CreatedBy?: string,
     *     TemplateSSMDocumentDetails?: TemplateSSMDocumentDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
