<?php

namespace Sunaoka\Aws\Structures\Lightsail\StopInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceName
 * @property bool $force
 */
class StopInstanceRequest extends Request
{
    /**
     * @param array{
     *     instanceName: string,
     *     force?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
