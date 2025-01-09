<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListIdentityPropagationConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REDSHIFT'|'QBUSINESS' $Service
 * @property list<string> $AuthorizedTargets
 */
class AuthorizedTargetsByService extends Shape
{
    /**
     * @param array{
     *     Service?: 'REDSHIFT'|'QBUSINESS',
     *     AuthorizedTargets?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
