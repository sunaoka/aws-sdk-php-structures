<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteMatchmakingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteMatchmakingConfigurationRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
