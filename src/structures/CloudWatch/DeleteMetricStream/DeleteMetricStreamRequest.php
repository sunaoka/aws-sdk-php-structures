<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DeleteMetricStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteMetricStreamRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
