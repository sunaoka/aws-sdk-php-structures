<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationAccessScopes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AuthorizedTargets
 * @property string $Scope
 */
class ScopeDetails extends Shape
{
    /**
     * @param array{
     *     AuthorizedTargets?: list<string>|null,
     *     Scope: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
