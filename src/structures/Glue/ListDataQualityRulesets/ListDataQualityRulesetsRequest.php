<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityRulesets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property Shapes\DataQualityRulesetFilterCriteria|null $Filter
 * @property array<string, string>|null $Tags
 */
class ListDataQualityRulesetsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     Filter?: Shapes\DataQualityRulesetFilterCriteria|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
