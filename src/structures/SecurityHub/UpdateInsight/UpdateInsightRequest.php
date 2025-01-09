<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateInsight;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InsightArn
 * @property string $Name
 * @property Shapes\AwsSecurityFindingFilters $Filters
 * @property string $GroupByAttribute
 */
class UpdateInsightRequest extends Request
{
    /**
     * @param array{
     *     InsightArn: string,
     *     Name?: string,
     *     Filters?: Shapes\AwsSecurityFindingFilters,
     *     GroupByAttribute?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
