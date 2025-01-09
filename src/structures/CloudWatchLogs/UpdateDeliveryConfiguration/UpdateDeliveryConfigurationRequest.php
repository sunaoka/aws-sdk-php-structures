<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\UpdateDeliveryConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property list<string> $recordFields
 * @property string $fieldDelimiter
 * @property Shapes\S3DeliveryConfiguration $s3DeliveryConfiguration
 */
class UpdateDeliveryConfigurationRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     recordFields?: list<string>,
     *     fieldDelimiter?: string,
     *     s3DeliveryConfiguration?: Shapes\S3DeliveryConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
