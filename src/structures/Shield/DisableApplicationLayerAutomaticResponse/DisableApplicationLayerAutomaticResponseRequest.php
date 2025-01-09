<?php

namespace Sunaoka\Aws\Structures\Shield\DisableApplicationLayerAutomaticResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class DisableApplicationLayerAutomaticResponseRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
