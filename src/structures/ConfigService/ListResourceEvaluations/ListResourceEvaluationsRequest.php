<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListResourceEvaluations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ResourceEvaluationFilters $Filters
 * @property int<0, 100> $Limit
 * @property string $NextToken
 */
class ListResourceEvaluationsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\ResourceEvaluationFilters,
     *     Limit?: int<0, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
