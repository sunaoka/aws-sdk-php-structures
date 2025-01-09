<?php

namespace Sunaoka\Aws\Structures\Shield\UpdateApplicationLayerAutomaticResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property Shapes\ResponseAction $Action
 */
class UpdateApplicationLayerAutomaticResponseRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     Action: Shapes\ResponseAction
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
