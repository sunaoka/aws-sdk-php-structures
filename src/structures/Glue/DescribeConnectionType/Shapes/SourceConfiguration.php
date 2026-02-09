<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GET'|'POST'|null $RequestMethod
 * @property string|null $RequestPath
 * @property list<ConnectorProperty>|null $RequestParameters
 * @property ResponseConfiguration|null $ResponseConfiguration
 * @property PaginationConfiguration|null $PaginationConfiguration
 */
class SourceConfiguration extends Shape
{
    /**
     * @param array{
     *     RequestMethod?: 'GET'|'POST'|null,
     *     RequestPath?: string|null,
     *     RequestParameters?: list<ConnectorProperty>|null,
     *     ResponseConfiguration?: ResponseConfiguration|null,
     *     PaginationConfiguration?: PaginationConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
