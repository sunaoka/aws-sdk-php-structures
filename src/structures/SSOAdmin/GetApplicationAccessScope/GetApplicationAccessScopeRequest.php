<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\GetApplicationAccessScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property string $Scope
 */
class GetApplicationAccessScopeRequest extends Request
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
