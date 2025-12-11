<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ListPortals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Authorization $Authorization
 * @property EndpointConfigurationResponse $EndpointConfiguration
 * @property list<string> $IncludedPortalProductArns
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property \Aws\Api\DateTimeResult|null $LastPublished
 * @property string|null $LastPublishedDescription
 * @property string $PortalArn
 * @property PortalContent $PortalContent
 * @property string $PortalId
 * @property Preview|null $Preview
 * @property 'PUBLISHED'|'PUBLISH_IN_PROGRESS'|'PUBLISH_FAILED'|'DISABLED'|null $PublishStatus
 * @property string|null $RumAppMonitorName
 * @property StatusException|null $StatusException
 * @property array<string, string>|null $Tags
 */
class PortalSummary extends Shape
{
    /**
     * @param array{
     *     Authorization: Authorization,
     *     EndpointConfiguration: EndpointConfigurationResponse,
     *     IncludedPortalProductArns: list<string>,
     *     LastModified: \Aws\Api\DateTimeResult,
     *     LastPublished?: \Aws\Api\DateTimeResult|null,
     *     LastPublishedDescription?: string|null,
     *     PortalArn: string,
     *     PortalContent: PortalContent,
     *     PortalId: string,
     *     Preview?: Preview|null,
     *     PublishStatus?: 'PUBLISHED'|'PUBLISH_IN_PROGRESS'|'PUBLISH_FAILED'|'DISABLED'|null,
     *     RumAppMonitorName?: string|null,
     *     StatusException?: StatusException|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
