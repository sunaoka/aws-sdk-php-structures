<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $solutionArn
 */
class DescribeSolutionRequest extends Request
{
    /**
     * @param array{solutionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
