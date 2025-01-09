<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\DeleteEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EnvironmentIdentifier
 */
class DeleteEnvironmentRequest extends Request
{
    /**
     * @param array{EnvironmentIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
