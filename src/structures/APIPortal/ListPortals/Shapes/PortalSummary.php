<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListPortals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $portalId
 * @property string $portalArn
 * @property EndpointConfigurationResponse $endpointConfiguration
 * @property Authorization $authorization
 * @property PortalContent $portalContent
 * @property list<string> $includedProductArns
 * @property 'PUBLISHED'|'PUBLISH_IN_PROGRESS'|'PUBLISH_FAILED'|'DISABLE_IN_PROGRESS'|'DISABLE_FAILED'|'DISABLED'|null $publishStatus
 * @property PortalStatusException|null $statusException
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property \Aws\Api\DateTimeResult|null $publishedAt
 * @property string|null $publishDescription
 * @property string|null $rumAppMonitorName
 * @property Preview|null $preview
 */
class PortalSummary extends Shape
{
    /**
     * @param array{
     *     portalId: string,
     *     portalArn: string,
     *     endpointConfiguration: EndpointConfigurationResponse,
     *     authorization: Authorization,
     *     portalContent: PortalContent,
     *     includedProductArns: list<string>,
     *     publishStatus?: 'PUBLISHED'|'PUBLISH_IN_PROGRESS'|'PUBLISH_FAILED'|'DISABLE_IN_PROGRESS'|'DISABLE_FAILED'|'DISABLED'|null,
     *     statusException?: PortalStatusException|null,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     publishedAt?: \Aws\Api\DateTimeResult|null,
     *     publishDescription?: string|null,
     *     rumAppMonitorName?: string|null,
     *     preview?: Preview|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
