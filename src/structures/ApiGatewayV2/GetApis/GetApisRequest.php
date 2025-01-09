<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetApis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MaxResults
 * @property string $NextToken
 */
class GetApisRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
