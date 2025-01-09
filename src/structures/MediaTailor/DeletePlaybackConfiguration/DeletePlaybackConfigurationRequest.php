<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DeletePlaybackConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeletePlaybackConfigurationRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
