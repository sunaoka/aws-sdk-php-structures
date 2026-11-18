<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $name
 * @property 'AZURE'|'GCP' $provider
 * @property string|null $description
 * @property Shapes\ProviderDetailCreate $providerDetail
 * @property array<string, string>|null $tags
 */
class CreateConnectorRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     name: string,
     *     provider: 'AZURE'|'GCP',
     *     description?: string|null,
     *     providerDetail: Shapes\ProviderDetailCreate,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
