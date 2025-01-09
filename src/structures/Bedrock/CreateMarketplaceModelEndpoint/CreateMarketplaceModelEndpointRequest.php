<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateMarketplaceModelEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelSourceIdentifier
 * @property Shapes\EndpointConfig $endpointConfig
 * @property bool $acceptEula
 * @property string $endpointName
 * @property string $clientRequestToken
 * @property list<Shapes\Tag> $tags
 */
class CreateMarketplaceModelEndpointRequest extends Request
{
    /**
     * @param array{
     *     modelSourceIdentifier: string,
     *     endpointConfig: Shapes\EndpointConfig,
     *     acceptEula?: bool,
     *     endpointName: string,
     *     clientRequestToken?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
