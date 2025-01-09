<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Audit
 * @property bool $General
 * @property string $AuditLogGroup
 * @property string $GeneralLogGroup
 * @property AwsAmazonMqBrokerLogsPendingDetails $Pending
 */
class AwsAmazonMqBrokerLogsDetails extends Shape
{
    /**
     * @param array{
     *     Audit?: bool,
     *     General?: bool,
     *     AuditLogGroup?: string,
     *     GeneralLogGroup?: string,
     *     Pending?: AwsAmazonMqBrokerLogsPendingDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
