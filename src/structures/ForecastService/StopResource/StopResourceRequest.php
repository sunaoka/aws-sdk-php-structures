<?php

namespace Sunaoka\Aws\Structures\ForecastService\StopResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class StopResourceRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
