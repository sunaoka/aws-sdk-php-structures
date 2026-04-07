<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListLinks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $gatewayId
 * @property string $peerGatewayId
 * @property 'PENDING_CREATION'|'PENDING_REQUEST'|'REQUESTED'|'ACCEPTED'|'ACTIVE'|'REJECTED'|'FAILED'|'PENDING_DELETION'|'DELETED'|'PENDING_UPDATE'|'PENDING_ISOLATION'|'ISOLATED'|'PENDING_RESTORATION' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'RESPONSE'|'REQUEST'|null $direction
 * @property list<ModuleConfiguration>|null $flowModules
 * @property list<ModuleConfiguration>|null $pendingFlowModules
 * @property LinkAttributes|null $attributes
 * @property LinkLogSettings|null $logSettings
 * @property 'DEFAULT'|'PUBLIC_INGRESS'|'PUBLIC_EGRESS'|'EXTERNAL_INBOUND'|null $connectivityType
 * @property string $linkId
 * @property array<string, string>|null $tags
 * @property string|null $publicEndpoint
 */
class ListLinksResponseStructure extends Shape
{
    /**
     * @param array{
     *     gatewayId: string,
     *     peerGatewayId: string,
     *     status: 'PENDING_CREATION'|'PENDING_REQUEST'|'REQUESTED'|'ACCEPTED'|'ACTIVE'|'REJECTED'|'FAILED'|'PENDING_DELETION'|'DELETED'|'PENDING_UPDATE'|'PENDING_ISOLATION'|'ISOLATED'|'PENDING_RESTORATION',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     direction?: 'RESPONSE'|'REQUEST'|null,
     *     flowModules?: list<ModuleConfiguration>|null,
     *     pendingFlowModules?: list<ModuleConfiguration>|null,
     *     attributes?: LinkAttributes|null,
     *     logSettings?: LinkLogSettings|null,
     *     connectivityType?: 'DEFAULT'|'PUBLIC_INGRESS'|'PUBLIC_EGRESS'|'EXTERNAL_INBOUND'|null,
     *     linkId: string,
     *     tags?: array<string, string>|null,
     *     publicEndpoint?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
