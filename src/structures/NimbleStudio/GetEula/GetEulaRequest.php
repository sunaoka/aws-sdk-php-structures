<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetEula;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $eulaId
 */
class GetEulaRequest extends Request
{
    /**
     * @param array{eulaId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
