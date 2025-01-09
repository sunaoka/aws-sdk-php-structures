<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $MaxResults
 * @property string $NextToken
 */
class GetModelsRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     MaxResults?: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
