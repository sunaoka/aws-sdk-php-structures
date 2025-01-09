<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectId
 * @property string $dashboardName
 * @property string $dashboardDescription
 * @property string $dashboardDefinition
 * @property string $clientToken
 * @property array<string, string> $tags
 */
class CreateDashboardRequest extends Request
{
    /**
     * @param array{
     *     projectId: string,
     *     dashboardName: string,
     *     dashboardDescription?: string,
     *     dashboardDefinition: string,
     *     clientToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
