<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DeleteConfigurationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteConfigurationPolicyRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
