<?php

namespace Sunaoka\Aws\Structures\drs\StopFailback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryInstanceID
 */
class StopFailbackRequest extends Request
{
    /**
     * @param array{recoveryInstanceID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
