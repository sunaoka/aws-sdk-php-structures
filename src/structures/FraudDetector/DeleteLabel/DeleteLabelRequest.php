<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteLabel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteLabelRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
