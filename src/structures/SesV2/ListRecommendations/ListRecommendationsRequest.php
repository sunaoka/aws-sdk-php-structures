<?php

namespace Sunaoka\Aws\Structures\SesV2\ListRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<'TYPE'|'IMPACT'|'STATUS'|'RESOURCE_ARN', string>|null $Filter
 * @property string|null $NextToken
 * @property int|null $PageSize
 */
class ListRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: array<'TYPE'|'IMPACT'|'STATUS'|'RESOURCE_ARN', string>|null,
     *     NextToken?: string|null,
     *     PageSize?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
