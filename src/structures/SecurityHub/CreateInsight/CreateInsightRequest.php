<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateInsight;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\AwsSecurityFindingFilters $Filters
 * @property string $GroupByAttribute
 */
class CreateInsightRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Filters: Shapes\AwsSecurityFindingFilters,
     *     GroupByAttribute: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
