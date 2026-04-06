<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DeleteApplicationAccessScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property string $Scope
 */
class DeleteApplicationAccessScopeRequest extends Request
{
    /**
     * @param array{
     *     ApplicationArn: string,
     *     Scope: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
