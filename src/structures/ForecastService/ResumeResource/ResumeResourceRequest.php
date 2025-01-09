<?php

namespace Sunaoka\Aws\Structures\ForecastService\ResumeResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class ResumeResourceRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
