<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetConfiguredModelAlgorithm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredModelAlgorithmArn
 */
class GetConfiguredModelAlgorithmRequest extends Request
{
    /**
     * @param array{configuredModelAlgorithmArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
