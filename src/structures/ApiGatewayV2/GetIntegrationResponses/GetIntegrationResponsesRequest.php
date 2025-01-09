<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetIntegrationResponses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $IntegrationId
 * @property string $MaxResults
 * @property string $NextToken
 */
class GetIntegrationResponsesRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     IntegrationId: string,
     *     MaxResults?: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
