<?php

namespace Sunaoka\Aws\Structures\mgn\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $connectorID
 * @property string $name
 * @property ConnectorSsmCommandConfig $ssmCommandConfig
 * @property string $ssmInstanceID
 * @property array<string, string> $tags
 */
class Connector extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     connectorID?: string,
     *     name?: string,
     *     ssmCommandConfig?: ConnectorSsmCommandConfig,
     *     ssmInstanceID?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
