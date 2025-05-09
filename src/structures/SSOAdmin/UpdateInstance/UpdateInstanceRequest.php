<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdateInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $InstanceArn
 */
class UpdateInstanceRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     InstanceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
