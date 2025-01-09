<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsElasticsearchDomainLogPublishingOptionsLogConfig $IndexSlowLogs
 * @property AwsElasticsearchDomainLogPublishingOptionsLogConfig $SearchSlowLogs
 * @property AwsElasticsearchDomainLogPublishingOptionsLogConfig $AuditLogs
 */
class AwsElasticsearchDomainLogPublishingOptions extends Shape
{
    /**
     * @param array{
     *     IndexSlowLogs?: AwsElasticsearchDomainLogPublishingOptionsLogConfig,
     *     SearchSlowLogs?: AwsElasticsearchDomainLogPublishingOptionsLogConfig,
     *     AuditLogs?: AwsElasticsearchDomainLogPublishingOptionsLogConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
