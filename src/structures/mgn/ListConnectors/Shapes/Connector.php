<?php

namespace Sunaoka\Aws\Structures\mgn\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $connectorID
 * @property string|null $name
 * @property ConnectorSsmCommandConfig|null $ssmCommandConfig
 * @property string|null $ssmInstanceID
 * @property array<string, string>|null $tags
 */
class Connector extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     connectorID?: string|null,
     *     name?: string|null,
     *     ssmCommandConfig?: ConnectorSsmCommandConfig|null,
     *     ssmInstanceID?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
