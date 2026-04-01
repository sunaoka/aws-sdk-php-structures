<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\AssociateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpoint
 * @property string|null $organizationId
 * @property list<string>|null $tools
 */
class MCPServerGrafanaConfiguration extends Shape
{
    /**
     * @param array{
     *     endpoint: string,
     *     organizationId?: string|null,
     *     tools?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
