<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Audit
 * @property bool|null $General
 * @property string|null $AuditLogGroup
 * @property string|null $GeneralLogGroup
 * @property AwsAmazonMqBrokerLogsPendingDetails|null $Pending
 */
class AwsAmazonMqBrokerLogsDetails extends Shape
{
    /**
     * @param array{
     *     Audit?: bool|null,
     *     General?: bool|null,
     *     AuditLogGroup?: string|null,
     *     GeneralLogGroup?: string|null,
     *     Pending?: AwsAmazonMqBrokerLogsPendingDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
