<?php

namespace Sunaoka\Aws\Structures\SesV2\ListRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<'TYPE'|'IMPACT'|'STATUS'|'RESOURCE_ARN', string> $Filter
 * @property string $NextToken
 * @property int $PageSize
 */
class ListRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: array<'TYPE'|'IMPACT'|'STATUS'|'RESOURCE_ARN', string>,
     *     NextToken?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
