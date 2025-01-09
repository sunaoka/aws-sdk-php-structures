<?php

namespace Sunaoka\Aws\Structures\QApps\PredictQApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property Shapes\PredictQAppInputOptions $options
 */
class PredictQAppRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     options?: Shapes\PredictQAppInputOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
