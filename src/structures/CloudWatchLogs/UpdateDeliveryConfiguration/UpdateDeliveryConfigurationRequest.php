<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\UpdateDeliveryConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property list<string>|null $recordFields
 * @property string|null $fieldDelimiter
 * @property Shapes\S3DeliveryConfiguration|null $s3DeliveryConfiguration
 */
class UpdateDeliveryConfigurationRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     recordFields?: list<string>|null,
     *     fieldDelimiter?: string|null,
     *     s3DeliveryConfiguration?: Shapes\S3DeliveryConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
