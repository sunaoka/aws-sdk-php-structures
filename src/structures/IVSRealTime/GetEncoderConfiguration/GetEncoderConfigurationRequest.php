<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetEncoderConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetEncoderConfigurationRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
