<?php

namespace Sunaoka\Aws\Structures\SecurityLake\UpdateSubscriberNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $authorizationApiKeyName
 * @property string $authorizationApiKeyValue
 * @property string $endpoint
 * @property 'POST'|'PUT' $httpMethod
 * @property string $targetRoleArn
 */
class HttpsNotificationConfiguration extends Shape
{
    /**
     * @param array{
     *     authorizationApiKeyName?: string,
     *     authorizationApiKeyValue?: string,
     *     endpoint: string,
     *     httpMethod?: 'POST'|'PUT',
     *     targetRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
