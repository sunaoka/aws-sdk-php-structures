<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeConfigurationTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $service
 * @property string $logType
 * @property string $resourceType
 * @property 'S3'|'CWL'|'FH' $deliveryDestinationType
 * @property ConfigurationTemplateDeliveryConfigValues $defaultDeliveryConfigValues
 * @property list<RecordField> $allowedFields
 * @property list<'json'|'plain'|'w3c'|'raw'|'parquet'> $allowedOutputFormats
 * @property string $allowedActionForAllowVendedLogsDeliveryForResource
 * @property list<string> $allowedFieldDelimiters
 * @property list<string> $allowedSuffixPathFields
 */
class ConfigurationTemplate extends Shape
{
    /**
     * @param array{
     *     service?: string,
     *     logType?: string,
     *     resourceType?: string,
     *     deliveryDestinationType?: 'S3'|'CWL'|'FH',
     *     defaultDeliveryConfigValues?: ConfigurationTemplateDeliveryConfigValues,
     *     allowedFields?: list<RecordField>,
     *     allowedOutputFormats?: list<'json'|'plain'|'w3c'|'raw'|'parquet'>,
     *     allowedActionForAllowVendedLogsDeliveryForResource?: string,
     *     allowedFieldDelimiters?: list<string>,
     *     allowedSuffixPathFields?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
