<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteEntityType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteEntityTypeRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
