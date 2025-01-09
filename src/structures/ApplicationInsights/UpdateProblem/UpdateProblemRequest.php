<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\UpdateProblem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProblemId
 * @property 'RESOLVED' $UpdateStatus
 * @property 'IGNORED'|'VISIBLE' $Visibility
 */
class UpdateProblemRequest extends Request
{
    /**
     * @param array{
     *     ProblemId: string,
     *     UpdateStatus?: 'RESOLVED',
     *     Visibility?: 'IGNORED'|'VISIBLE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
