<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TENANT'|'SUBSCRIPTION'|'ORGANIZATION'|'PROJECT' $scopeType
 * @property list<string>|null $scopeValues
 */
class GcpCapabilityScopeInput extends Shape
{
    /**
     * @param array{
     *     scopeType: 'TENANT'|'SUBSCRIPTION'|'ORGANIZATION'|'PROJECT',
     *     scopeValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
