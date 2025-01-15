<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsOpenSearchServiceDomainLogPublishingOption|null $IndexSlowLogs
 * @property AwsOpenSearchServiceDomainLogPublishingOption|null $SearchSlowLogs
 * @property AwsOpenSearchServiceDomainLogPublishingOption|null $AuditLogs
 */
class AwsOpenSearchServiceDomainLogPublishingOptionsDetails extends Shape
{
    /**
     * @param array{
     *     IndexSlowLogs?: AwsOpenSearchServiceDomainLogPublishingOption|null,
     *     SearchSlowLogs?: AwsOpenSearchServiceDomainLogPublishingOption|null,
     *     AuditLogs?: AwsOpenSearchServiceDomainLogPublishingOption|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
