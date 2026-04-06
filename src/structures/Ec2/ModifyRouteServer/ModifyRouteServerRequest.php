<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyRouteServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RouteServerId
 * @property 'enable'|'disable'|'reset'|null $PersistRoutes
 * @property int|null $PersistRoutesDuration
 * @property bool|null $SnsNotificationsEnabled
 * @property bool|null $DryRun
 */
class ModifyRouteServerRequest extends Request
{
    /**
     * @param array{
     *     RouteServerId: string,
     *     PersistRoutes?: 'enable'|'disable'|'reset'|null,
     *     PersistRoutesDuration?: int|null,
     *     SnsNotificationsEnabled?: bool|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
