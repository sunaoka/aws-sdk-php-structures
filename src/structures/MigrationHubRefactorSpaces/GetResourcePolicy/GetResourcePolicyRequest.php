<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\GetResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetResourcePolicyRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
