<?php

namespace Sunaoka\Aws\Structures\mgn\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $connectorID
 * @property string|null $name
 * @property string|null $ssmInstanceID
 * @property string|null $arn
 * @property array<string, string>|null $tags
 * @property ConnectorSsmCommandConfig|null $ssmCommandConfig
 */
class Connector extends Shape
{
    /**
     * @param array{
     *     connectorID?: string|null,
     *     name?: string|null,
     *     ssmInstanceID?: string|null,
     *     arn?: string|null,
     *     tags?: array<string, string>|null,
     *     ssmCommandConfig?: ConnectorSsmCommandConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
