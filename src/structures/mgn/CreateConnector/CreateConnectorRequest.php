<?php

namespace Sunaoka\Aws\Structures\mgn\CreateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\ConnectorSsmCommandConfig|null $ssmCommandConfig
 * @property string $ssmInstanceID
 * @property array<string, string>|null $tags
 */
class CreateConnectorRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     ssmCommandConfig?: Shapes\ConnectorSsmCommandConfig|null,
     *     ssmInstanceID: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
