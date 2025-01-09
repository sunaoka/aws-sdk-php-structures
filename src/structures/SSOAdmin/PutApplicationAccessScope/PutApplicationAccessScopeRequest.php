<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutApplicationAccessScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property list<string> $AuthorizedTargets
 * @property string $Scope
 */
class PutApplicationAccessScopeRequest extends Request
{
    /**
     * @param array{
     *     ApplicationArn: string,
     *     AuthorizedTargets?: list<string>,
     *     Scope: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
