<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateInsight;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InsightArn
 * @property string|null $Name
 * @property Shapes\AwsSecurityFindingFilters|null $Filters
 * @property string|null $GroupByAttribute
 */
class UpdateInsightRequest extends Request
{
    /**
     * @param array{
     *     InsightArn: string,
     *     Name?: string|null,
     *     Filters?: Shapes\AwsSecurityFindingFilters|null,
     *     GroupByAttribute?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
