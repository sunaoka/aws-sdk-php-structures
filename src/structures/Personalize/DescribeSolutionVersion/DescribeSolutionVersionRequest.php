<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolutionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $solutionVersionArn
 */
class DescribeSolutionVersionRequest extends Request
{
    /**
     * @param array{solutionVersionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
