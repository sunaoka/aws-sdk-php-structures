<?php

namespace Sunaoka\Aws\Structures\SageMaker\StartSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceIdentifier
 */
class StartSessionRequest extends Request
{
    /**
     * @param array{ResourceIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
