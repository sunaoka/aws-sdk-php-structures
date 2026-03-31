<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiKeyName
 * @property string $apiKeyValue
 * @property string $apiKeyHeader
 */
class MCPServerAPIKeyConfig extends Shape
{
    /**
     * @param array{
     *     apiKeyName: string,
     *     apiKeyValue: string,
     *     apiKeyHeader: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
