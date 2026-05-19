<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $tools
 */
class MCPServerSigV4Configuration extends Shape
{
    /**
     * @param array{tools: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
