<?php

namespace Sunaoka\Aws\Structures\CloudHsm\CreateLunaClient;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Label
 * @property string $Certificate
 */
class CreateLunaClientRequest extends Request
{
    /**
     * @param array{
     *     Label?: string,
     *     Certificate: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
