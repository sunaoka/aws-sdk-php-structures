<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteBuild;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BuildId
 */
class DeleteBuildRequest extends Request
{
    /**
     * @param array{BuildId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
