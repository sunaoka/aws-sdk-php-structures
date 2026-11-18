<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConformancePacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConformancePackName
 * @property string $ConformancePackArn
 * @property string $ConformancePackId
 * @property string|null $DeliveryS3Bucket
 * @property string|null $DeliveryS3KeyPrefix
 * @property list<ConformancePackInputParameter>|null $ConformancePackInputParameters
 * @property \Aws\Api\DateTimeResult|null $LastUpdateRequestedTime
 * @property string|null $CreatedBy
 * @property TemplateSSMDocumentDetails|null $TemplateSSMDocumentDetails
 * @property 'CUSTOM'|'MANAGED'|null $Type
 * @property ConformancePackSource|null $Source
 * @property ConformancePackScope|null $Scope
 */
class ConformancePackDetail extends Shape
{
    /**
     * @param array{
     *     ConformancePackName: string,
     *     ConformancePackArn: string,
     *     ConformancePackId: string,
     *     DeliveryS3Bucket?: string|null,
     *     DeliveryS3KeyPrefix?: string|null,
     *     ConformancePackInputParameters?: list<ConformancePackInputParameter>|null,
     *     LastUpdateRequestedTime?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: string|null,
     *     TemplateSSMDocumentDetails?: TemplateSSMDocumentDetails|null,
     *     Type?: 'CUSTOM'|'MANAGED'|null,
     *     Source?: ConformancePackSource|null,
     *     Scope?: ConformancePackScope|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
