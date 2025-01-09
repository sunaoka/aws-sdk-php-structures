<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppLaunchConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serverGroupId
 * @property int $launchOrder
 * @property list<ServerLaunchConfiguration> $serverLaunchConfigurations
 */
class ServerGroupLaunchConfiguration extends Shape
{
    /**
     * @param array{
     *     serverGroupId?: string,
     *     launchOrder?: int,
     *     serverLaunchConfigurations?: list<ServerLaunchConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
