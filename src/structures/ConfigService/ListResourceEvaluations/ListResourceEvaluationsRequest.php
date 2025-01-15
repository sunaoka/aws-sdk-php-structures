<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListResourceEvaluations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ResourceEvaluationFilters|null $Filters
 * @property int<0, 100>|null $Limit
 * @property string|null $NextToken
 */
class ListResourceEvaluationsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\ResourceEvaluationFilters|null,
     *     Limit?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
