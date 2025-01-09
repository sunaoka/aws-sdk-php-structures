<?php

namespace Sunaoka\Aws\Structures\WorkMail\CreateIdentityCenterApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $InstanceArn
 * @property string $ClientToken
 */
class CreateIdentityCenterApplicationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     InstanceArn: string,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
