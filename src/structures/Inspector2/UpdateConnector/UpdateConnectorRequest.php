<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorArn
 * @property string|null $description
 * @property Shapes\ProviderDetailUpdate|null $providerDetail
 */
class UpdateConnectorRequest extends Request
{
    /**
     * @param array{
     *     connectorArn: string,
     *     description?: string|null,
     *     providerDetail?: Shapes\ProviderDetailUpdate|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
