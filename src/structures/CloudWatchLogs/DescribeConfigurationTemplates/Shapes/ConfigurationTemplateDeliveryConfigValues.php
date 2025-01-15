<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeConfigurationTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $recordFields
 * @property string|null $fieldDelimiter
 * @property S3DeliveryConfiguration|null $s3DeliveryConfiguration
 */
class ConfigurationTemplateDeliveryConfigValues extends Shape
{
    /**
     * @param array{
     *     recordFields?: list<string>|null,
     *     fieldDelimiter?: string|null,
     *     s3DeliveryConfiguration?: S3DeliveryConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
