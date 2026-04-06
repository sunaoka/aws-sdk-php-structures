<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\DeleteConfiguredModelAlgorithm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredModelAlgorithmArn
 */
class DeleteConfiguredModelAlgorithmRequest extends Request
{
    /**
     * @param array{configuredModelAlgorithmArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
