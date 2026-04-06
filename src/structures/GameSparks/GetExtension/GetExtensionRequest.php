<?php

namespace Sunaoka\Aws\Structures\GameSparks\GetExtension;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Namespace
 */
class GetExtensionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Namespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
