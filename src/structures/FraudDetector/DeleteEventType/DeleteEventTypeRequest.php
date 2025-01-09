<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteEventType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteEventTypeRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
