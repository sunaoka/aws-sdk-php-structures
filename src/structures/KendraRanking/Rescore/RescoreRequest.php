<?php

namespace Sunaoka\Aws\Structures\KendraRanking\Rescore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RescoreExecutionPlanId
 * @property string $SearchQuery
 * @property list<Shapes\Document> $Documents
 */
class RescoreRequest extends Request
{
    /**
     * @param array{
     *     RescoreExecutionPlanId: string,
     *     SearchQuery: string,
     *     Documents: list<Shapes\Document>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
