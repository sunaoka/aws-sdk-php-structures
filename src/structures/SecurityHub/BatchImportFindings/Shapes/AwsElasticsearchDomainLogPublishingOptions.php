<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsElasticsearchDomainLogPublishingOptionsLogConfig|null $IndexSlowLogs
 * @property AwsElasticsearchDomainLogPublishingOptionsLogConfig|null $SearchSlowLogs
 * @property AwsElasticsearchDomainLogPublishingOptionsLogConfig|null $AuditLogs
 */
class AwsElasticsearchDomainLogPublishingOptions extends Shape
{
    /**
     * @param array{
     *     IndexSlowLogs?: AwsElasticsearchDomainLogPublishingOptionsLogConfig|null,
     *     SearchSlowLogs?: AwsElasticsearchDomainLogPublishingOptionsLogConfig|null,
     *     AuditLogs?: AwsElasticsearchDomainLogPublishingOptionsLogConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
