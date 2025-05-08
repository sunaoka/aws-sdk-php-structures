<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutApplicationAccessScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Scope
 * @property list<string>|null $AuthorizedTargets
 * @property string $ApplicationArn
 */
class PutApplicationAccessScopeRequest extends Request
{
    /**
     * @param array{
     *     Scope: string,
     *     AuthorizedTargets?: list<string>|null,
     *     ApplicationArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
