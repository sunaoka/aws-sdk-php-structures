<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdateInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $Name
 */
class UpdateInstanceRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
