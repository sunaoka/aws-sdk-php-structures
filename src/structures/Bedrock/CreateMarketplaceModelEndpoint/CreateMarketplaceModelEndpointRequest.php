<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateMarketplaceModelEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelSourceIdentifier
 * @property Shapes\EndpointConfig $endpointConfig
 * @property bool|null $acceptEula
 * @property string $endpointName
 * @property string|null $clientRequestToken
 * @property list<Shapes\Tag>|null $tags
 */
class CreateMarketplaceModelEndpointRequest extends Request
{
    /**
     * @param array{
     *     modelSourceIdentifier: string,
     *     endpointConfig: Shapes\EndpointConfig,
     *     acceptEula?: bool|null,
     *     endpointName: string,
     *     clientRequestToken?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
