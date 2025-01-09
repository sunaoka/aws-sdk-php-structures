<?php

namespace Sunaoka\Aws\Structures\CloudWatch\ListManagedInsightRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 */
class ListManagedInsightRulesRequest extends Request
{
    /**
     * @param array{
     *     ResourceARN: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
