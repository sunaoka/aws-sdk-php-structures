<?php

namespace Sunaoka\Aws\Structures\SecurityLake\UpdateSubscriberNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $authorizationApiKeyName
 * @property string|null $authorizationApiKeyValue
 * @property string $endpoint
 * @property 'POST'|'PUT'|null $httpMethod
 * @property string $targetRoleArn
 */
class HttpsNotificationConfiguration extends Shape
{
    /**
     * @param array{
     *     authorizationApiKeyName?: string|null,
     *     authorizationApiKeyValue?: string|null,
     *     endpoint: string,
     *     httpMethod?: 'POST'|'PUT'|null,
     *     targetRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
