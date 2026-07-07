<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TENANT'|'SUBSCRIPTION' $ScopeType
 * @property list<string>|null $ScopeValues
 */
class AzureScopeConfiguration extends Shape
{
    /**
     * @param array{
     *     ScopeType: 'TENANT'|'SUBSCRIPTION',
     *     ScopeValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
