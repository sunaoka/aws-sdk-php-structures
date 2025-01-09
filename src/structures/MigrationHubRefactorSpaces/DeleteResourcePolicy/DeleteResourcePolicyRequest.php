<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\DeleteResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteResourcePolicyRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
