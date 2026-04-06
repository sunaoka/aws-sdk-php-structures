<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\DeleteEncoderConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteEncoderConfigurationRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
