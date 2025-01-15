<?php

namespace Sunaoka\Aws\Structures\CloudWatch\ListManagedInsightRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 */
class ListManagedInsightRulesRequest extends Request
{
    /**
     * @param array{
     *     ResourceARN: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
