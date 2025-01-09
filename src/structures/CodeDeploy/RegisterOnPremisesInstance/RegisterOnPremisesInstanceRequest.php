<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\RegisterOnPremisesInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceName
 * @property string $iamSessionArn
 * @property string $iamUserArn
 */
class RegisterOnPremisesInstanceRequest extends Request
{
    /**
     * @param array{
     *     instanceName: string,
     *     iamSessionArn?: string,
     *     iamUserArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
