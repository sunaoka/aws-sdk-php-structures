<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteEvaluationResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigRuleName
 */
class DeleteEvaluationResultsRequest extends Request
{
    /**
     * @param array{ConfigRuleName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
