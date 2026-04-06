<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppLaunchConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serverGroupId
 * @property int|null $launchOrder
 * @property list<ServerLaunchConfiguration>|null $serverLaunchConfigurations
 */
class ServerGroupLaunchConfiguration extends Shape
{
    /**
     * @param array{
     *     serverGroupId?: string|null,
     *     launchOrder?: int|null,
     *     serverLaunchConfigurations?: list<ServerLaunchConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
