<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $endpoint
 */
class MCPServerNewRelicConfiguration extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     endpoint: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
