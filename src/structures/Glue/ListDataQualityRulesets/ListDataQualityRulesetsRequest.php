<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityRulesets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property Shapes\DataQualityRulesetFilterCriteria $Filter
 * @property array<string, string> $Tags
 */
class ListDataQualityRulesetsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Filter?: Shapes\DataQualityRulesetFilterCriteria,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
