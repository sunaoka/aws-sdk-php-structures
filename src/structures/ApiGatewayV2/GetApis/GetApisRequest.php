<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetApis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $MaxResults
 * @property string|null $NextToken
 */
class GetApisRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
