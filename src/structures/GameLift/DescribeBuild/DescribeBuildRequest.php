<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeBuild;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BuildId
 */
class DescribeBuildRequest extends Request
{
    /**
     * @param array{BuildId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
