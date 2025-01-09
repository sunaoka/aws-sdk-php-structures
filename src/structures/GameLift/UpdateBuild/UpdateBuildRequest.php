<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateBuild;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BuildId
 * @property string $Name
 * @property string $Version
 */
class UpdateBuildRequest extends Request
{
    /**
     * @param array{
     *     BuildId: string,
     *     Name?: string,
     *     Version?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
