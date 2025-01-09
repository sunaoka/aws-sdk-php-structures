<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceName
 * @property bool $forceDeleteAddOns
 */
class DeleteInstanceRequest extends Request
{
    /**
     * @param array{
     *     instanceName: string,
     *     forceDeleteAddOns?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
