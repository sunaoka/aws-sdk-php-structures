<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpoint
 * @property string|null $organizationId
 * @property list<string>|null $tools
 * @property list<MCPToolDetail>|null $enabledElevatedTools
 */
class MCPServerGrafanaConfiguration extends Shape
{
    /**
     * @param array{
     *     endpoint: string,
     *     organizationId?: string|null,
     *     tools?: list<string>|null,
     *     enabledElevatedTools?: list<MCPToolDetail>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
