<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetApiMappings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string|null $MaxResults
 * @property string|null $NextToken
 */
class GetApiMappingsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     MaxResults?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
