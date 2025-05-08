<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationAccessScopes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Scope
 * @property list<string>|null $AuthorizedTargets
 */
class ScopeDetails extends Shape
{
    /**
     * @param array{
     *     Scope: string,
     *     AuthorizedTargets?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
