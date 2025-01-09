<?php

namespace Sunaoka\Aws\Structures\Cloud9\UpdateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $name
 * @property string $description
 * @property 'ENABLE'|'DISABLE' $managedCredentialsAction
 */
class UpdateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     name?: string,
     *     description?: string,
     *     managedCredentialsAction?: 'ENABLE'|'DISABLE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
