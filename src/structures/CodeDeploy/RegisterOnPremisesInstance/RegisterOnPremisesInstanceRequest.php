<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\RegisterOnPremisesInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceName
 * @property string|null $iamSessionArn
 * @property string|null $iamUserArn
 */
class RegisterOnPremisesInstanceRequest extends Request
{
    /**
     * @param array{
     *     instanceName: string,
     *     iamSessionArn?: string|null,
     *     iamUserArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
