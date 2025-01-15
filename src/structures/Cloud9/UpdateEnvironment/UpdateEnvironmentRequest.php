<?php

namespace Sunaoka\Aws\Structures\Cloud9\UpdateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string|null $name
 * @property string|null $description
 * @property 'ENABLE'|'DISABLE'|null $managedCredentialsAction
 */
class UpdateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     name?: string|null,
     *     description?: string|null,
     *     managedCredentialsAction?: 'ENABLE'|'DISABLE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
