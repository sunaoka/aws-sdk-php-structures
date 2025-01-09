<?php

namespace Sunaoka\Aws\Structures\Personalize\StopSolutionVersionCreation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $solutionVersionArn
 */
class StopSolutionVersionCreationRequest extends Request
{
    /**
     * @param array{solutionVersionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
