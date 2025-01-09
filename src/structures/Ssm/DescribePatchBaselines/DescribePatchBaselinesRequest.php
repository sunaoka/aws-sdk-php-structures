<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribePatchBaselines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\PatchOrchestratorFilter> $Filters
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class DescribePatchBaselinesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\PatchOrchestratorFilter>,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
