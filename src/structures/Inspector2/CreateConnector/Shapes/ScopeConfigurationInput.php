<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TENANT'|'SUBSCRIPTION' $scopeType
 * @property list<string>|null $scopeValues
 */
class ScopeConfigurationInput extends Shape
{
    /**
     * @param array{
     *     scopeType: 'TENANT'|'SUBSCRIPTION',
     *     scopeValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
