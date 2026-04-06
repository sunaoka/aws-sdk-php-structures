<?php

namespace Sunaoka\Aws\Structures\mgn\CreateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $ssmInstanceID
 * @property array<string, string>|null $tags
 * @property Shapes\ConnectorSsmCommandConfig|null $ssmCommandConfig
 */
class CreateConnectorRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     ssmInstanceID: string,
     *     tags?: array<string, string>|null,
     *     ssmCommandConfig?: Shapes\ConnectorSsmCommandConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
