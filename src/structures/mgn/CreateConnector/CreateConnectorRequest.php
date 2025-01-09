<?php

namespace Sunaoka\Aws\Structures\mgn\CreateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\ConnectorSsmCommandConfig $ssmCommandConfig
 * @property string $ssmInstanceID
 * @property array<string, string> $tags
 */
class CreateConnectorRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     ssmCommandConfig?: Shapes\ConnectorSsmCommandConfig,
     *     ssmInstanceID: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
