<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribePatchBaselines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\PatchOrchestratorFilter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribePatchBaselinesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\PatchOrchestratorFilter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
