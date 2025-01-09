<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetIngestConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetIngestConfigurationRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
