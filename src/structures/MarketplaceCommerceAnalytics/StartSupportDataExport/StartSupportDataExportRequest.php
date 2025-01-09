<?php

namespace Sunaoka\Aws\Structures\MarketplaceCommerceAnalytics\StartSupportDataExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'customer_support_contacts_data'|'test_customer_support_contacts_data' $dataSetType
 * @property \Aws\Api\DateTimeResult $fromDate
 * @property string $roleNameArn
 * @property string $destinationS3BucketName
 * @property string $destinationS3Prefix
 * @property string $snsTopicArn
 * @property array<string, string> $customerDefinedValues
 */
class StartSupportDataExportRequest extends Request
{
    /**
     * @param array{
     *     dataSetType: 'customer_support_contacts_data'|'test_customer_support_contacts_data',
     *     fromDate: \Aws\Api\DateTimeResult,
     *     roleNameArn: string,
     *     destinationS3BucketName: string,
     *     destinationS3Prefix?: string,
     *     snsTopicArn: string,
     *     customerDefinedValues?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
