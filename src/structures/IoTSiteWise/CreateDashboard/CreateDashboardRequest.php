<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectId
 * @property string $dashboardName
 * @property string|null $dashboardDescription
 * @property string $dashboardDefinition
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateDashboardRequest extends Request
{
    /**
     * @param array{
     *     projectId: string,
     *     dashboardName: string,
     *     dashboardDescription?: string|null,
     *     dashboardDefinition: string,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
