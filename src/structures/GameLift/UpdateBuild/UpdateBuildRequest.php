<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateBuild;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BuildId
 * @property string|null $Name
 * @property string|null $Version
 */
class UpdateBuildRequest extends Request
{
    /**
     * @param array{
     *     BuildId: string,
     *     Name?: string|null,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
