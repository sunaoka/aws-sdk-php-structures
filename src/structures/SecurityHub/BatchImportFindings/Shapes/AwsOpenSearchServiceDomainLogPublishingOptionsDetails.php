<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsOpenSearchServiceDomainLogPublishingOption $IndexSlowLogs
 * @property AwsOpenSearchServiceDomainLogPublishingOption $SearchSlowLogs
 * @property AwsOpenSearchServiceDomainLogPublishingOption $AuditLogs
 */
class AwsOpenSearchServiceDomainLogPublishingOptionsDetails extends Shape
{
    /**
     * @param array{
     *     IndexSlowLogs?: AwsOpenSearchServiceDomainLogPublishingOption,
     *     SearchSlowLogs?: AwsOpenSearchServiceDomainLogPublishingOption,
     *     AuditLogs?: AwsOpenSearchServiceDomainLogPublishingOption
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
