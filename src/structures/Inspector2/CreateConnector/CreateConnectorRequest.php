<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $name
 * @property 'AZURE' $provider
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
     *     provider: 'AZURE',
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
