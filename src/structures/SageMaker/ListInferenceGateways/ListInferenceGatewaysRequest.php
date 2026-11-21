<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property list<Shapes\GlobalInferenceGatewayMemberFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListInferenceGatewaysRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     Filters?: list<Shapes\GlobalInferenceGatewayMemberFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
