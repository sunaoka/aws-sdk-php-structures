<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListEventLogs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $eventName
 * @property string $eventType
 * @property string $eventCategory
 * @property string $eventSource
 * @property \Aws\Api\DateTimeResult $eventTime
 * @property 'READONLY'|'MUTATION' $operationType
 * @property UserIdentity $userIdentity
 * @property ProjectInformation|null $projectInformation
 * @property string|null $requestId
 * @property EventPayload|null $requestPayload
 * @property EventPayload|null $responsePayload
 * @property string|null $errorCode
 * @property string|null $sourceIpAddress
 * @property string|null $userAgent
 */
class EventLogEntry extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     eventName: string,
     *     eventType: string,
     *     eventCategory: string,
     *     eventSource: string,
     *     eventTime: \Aws\Api\DateTimeResult,
     *     operationType: 'READONLY'|'MUTATION',
     *     userIdentity: UserIdentity,
     *     projectInformation?: ProjectInformation|null,
     *     requestId?: string|null,
     *     requestPayload?: EventPayload|null,
     *     responsePayload?: EventPayload|null,
     *     errorCode?: string|null,
     *     sourceIpAddress?: string|null,
     *     userAgent?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
