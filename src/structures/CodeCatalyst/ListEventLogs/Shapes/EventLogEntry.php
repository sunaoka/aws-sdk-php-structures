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
 * @property ProjectInformation $projectInformation
 * @property string $requestId
 * @property EventPayload $requestPayload
 * @property EventPayload $responsePayload
 * @property string $errorCode
 * @property string $sourceIpAddress
 * @property string $userAgent
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
     *     projectInformation?: ProjectInformation,
     *     requestId?: string,
     *     requestPayload?: EventPayload,
     *     responsePayload?: EventPayload,
     *     errorCode?: string,
     *     sourceIpAddress?: string,
     *     userAgent?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
