<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateConnectorV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROJECT'|'ORGANIZATION' $ScopeType
 * @property list<string>|null $ScopeValues
 */
class GcpScopeConfiguration extends Shape
{
    /**
     * @param array{
     *     ScopeType: 'PROJECT'|'ORGANIZATION',
     *     ScopeValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
