<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteOutcome;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteOutcomeRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
