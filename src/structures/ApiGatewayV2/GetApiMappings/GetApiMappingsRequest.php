<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetApiMappings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $MaxResults
 * @property string $NextToken
 */
class GetApiMappingsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     MaxResults?: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
