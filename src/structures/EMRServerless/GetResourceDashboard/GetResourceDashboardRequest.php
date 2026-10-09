<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetResourceDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $resourceId
 * @property 'SESSION' $resourceType
 * @property bool|null $accessSystemProfileLogs
 */
class GetResourceDashboardRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     resourceId: string,
     *     resourceType: 'SESSION',
     *     accessSystemProfileLogs?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
