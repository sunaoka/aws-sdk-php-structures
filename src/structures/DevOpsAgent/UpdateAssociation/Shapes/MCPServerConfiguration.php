<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $tools
 * @property list<MCPToolDetail>|null $toolDetails
 */
class MCPServerConfiguration extends Shape
{
    /**
     * @param array{
     *     tools: list<string>,
     *     toolDetails?: list<MCPToolDetail>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
