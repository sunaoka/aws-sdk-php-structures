<?php

namespace Sunaoka\Aws\Structures\Glue\ListIntegrationTableProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<string>|null $Values
 */
class IntegrationTablePropertiesFilter extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
