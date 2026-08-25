<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\AssociateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MCPToolDetail>|null $enabledElevatedTools
 */
class MCPServerDatadogConfiguration extends Shape
{
    /**
     * @param array{enabledElevatedTools?: list<MCPToolDetail>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
