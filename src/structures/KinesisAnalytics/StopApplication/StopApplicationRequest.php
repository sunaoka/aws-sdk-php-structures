<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\StopApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 */
class StopApplicationRequest extends Request
{
    /**
     * @param array{ApplicationName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
