<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\GetEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EnvironmentIdentifier
 */
class GetEnvironmentRequest extends Request
{
    /**
     * @param array{EnvironmentIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
