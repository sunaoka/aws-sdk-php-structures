<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\CreateEventSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WebhookAuthConfiguration $AuthConfiguration
 * @property string|null $KmsKeyIdentifier
 * @property string $RoleArn
 * @property list<string>|null $MetadataHttpHeaders
 * @property WebhookDeduplicationConfiguration|null $DeduplicationConfiguration
 * @property LogConfiguration|null $LogConfiguration
 */
class WebhookEventsSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     AuthConfiguration: WebhookAuthConfiguration,
     *     KmsKeyIdentifier?: string|null,
     *     RoleArn: string,
     *     MetadataHttpHeaders?: list<string>|null,
     *     DeduplicationConfiguration?: WebhookDeduplicationConfiguration|null,
     *     LogConfiguration?: LogConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
