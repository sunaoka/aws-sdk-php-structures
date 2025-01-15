<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListIdentityPropagationConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REDSHIFT'|'QBUSINESS'|null $Service
 * @property list<string>|null $AuthorizedTargets
 */
class AuthorizedTargetsByService extends Shape
{
    /**
     * @param array{
     *     Service?: 'REDSHIFT'|'QBUSINESS'|null,
     *     AuthorizedTargets?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
