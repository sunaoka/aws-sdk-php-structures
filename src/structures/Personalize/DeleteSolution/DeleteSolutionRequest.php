<?php

namespace Sunaoka\Aws\Structures\Personalize\DeleteSolution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $solutionArn
 */
class DeleteSolutionRequest extends Request
{
    /**
     * @param array{solutionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
