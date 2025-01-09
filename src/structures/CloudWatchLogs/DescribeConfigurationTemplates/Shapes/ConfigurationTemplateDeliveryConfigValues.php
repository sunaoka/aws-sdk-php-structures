<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeConfigurationTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $recordFields
 * @property string $fieldDelimiter
 * @property S3DeliveryConfiguration $s3DeliveryConfiguration
 */
class ConfigurationTemplateDeliveryConfigValues extends Shape
{
    /**
     * @param array{
     *     recordFields?: list<string>,
     *     fieldDelimiter?: string,
     *     s3DeliveryConfiguration?: S3DeliveryConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
