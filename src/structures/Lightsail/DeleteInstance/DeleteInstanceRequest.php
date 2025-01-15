<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceName
 * @property bool|null $forceDeleteAddOns
 */
class DeleteInstanceRequest extends Request
{
    /**
     * @param array{
     *     instanceName: string,
     *     forceDeleteAddOns?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
