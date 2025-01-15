<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string|null $MaxResults
 * @property string|null $NextToken
 */
class GetIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     MaxResults?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
