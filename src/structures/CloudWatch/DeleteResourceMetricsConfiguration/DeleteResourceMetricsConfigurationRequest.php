<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DeleteResourceMetricsConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class DeleteResourceMetricsConfigurationRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
