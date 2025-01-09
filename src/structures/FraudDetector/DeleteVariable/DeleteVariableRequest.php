<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteVariable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteVariableRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
