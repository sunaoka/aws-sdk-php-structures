<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Names
 */
class DeleteParametersRequest extends Request
{
    /**
     * @param array{Names: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
