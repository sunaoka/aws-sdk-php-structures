<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeConfigurationTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $service
 * @property string|null $logType
 * @property string|null $resourceType
 * @property 'S3'|'CWL'|'FH'|null $deliveryDestinationType
 * @property ConfigurationTemplateDeliveryConfigValues|null $defaultDeliveryConfigValues
 * @property list<RecordField>|null $allowedFields
 * @property list<'json'|'plain'|'w3c'|'raw'|'parquet'>|null $allowedOutputFormats
 * @property string|null $allowedActionForAllowVendedLogsDeliveryForResource
 * @property list<string>|null $allowedFieldDelimiters
 * @property list<string>|null $allowedSuffixPathFields
 */
class ConfigurationTemplate extends Shape
{
    /**
     * @param array{
     *     service?: string|null,
     *     logType?: string|null,
     *     resourceType?: string|null,
     *     deliveryDestinationType?: 'S3'|'CWL'|'FH'|null,
     *     defaultDeliveryConfigValues?: ConfigurationTemplateDeliveryConfigValues|null,
     *     allowedFields?: list<RecordField>|null,
     *     allowedOutputFormats?: list<'json'|'plain'|'w3c'|'raw'|'parquet'>|null,
     *     allowedActionForAllowVendedLogsDeliveryForResource?: string|null,
     *     allowedFieldDelimiters?: list<string>|null,
     *     allowedSuffixPathFields?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
