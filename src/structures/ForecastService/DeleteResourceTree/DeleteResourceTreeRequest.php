<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeleteResourceTree;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class DeleteResourceTreeRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
