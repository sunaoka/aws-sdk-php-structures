<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\UpdateProblem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProblemId
 * @property 'RESOLVED'|null $UpdateStatus
 * @property 'IGNORED'|'VISIBLE'|null $Visibility
 */
class UpdateProblemRequest extends Request
{
    /**
     * @param array{
     *     ProblemId: string,
     *     UpdateStatus?: 'RESOLVED'|null,
     *     Visibility?: 'IGNORED'|'VISIBLE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
