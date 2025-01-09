<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteKnownHostKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceName
 */
class DeleteKnownHostKeysRequest extends Request
{
    /**
     * @param array{instanceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
