<?php

namespace Sunaoka\Aws\Structures\Translate\DeleteTerminology;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteTerminologyRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
