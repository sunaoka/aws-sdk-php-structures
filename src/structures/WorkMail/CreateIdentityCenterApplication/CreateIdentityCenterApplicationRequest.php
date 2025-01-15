<?php

namespace Sunaoka\Aws\Structures\WorkMail\CreateIdentityCenterApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $InstanceArn
 * @property string|null $ClientToken
 */
class CreateIdentityCenterApplicationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     InstanceArn: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
