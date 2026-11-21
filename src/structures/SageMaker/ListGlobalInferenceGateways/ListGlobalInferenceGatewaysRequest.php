<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListGlobalInferenceGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\GlobalInferenceGatewayFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListGlobalInferenceGatewaysRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\GlobalInferenceGatewayFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
