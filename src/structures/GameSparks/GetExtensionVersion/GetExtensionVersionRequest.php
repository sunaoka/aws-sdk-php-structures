<?php

namespace Sunaoka\Aws\Structures\GameSparks\GetExtensionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExtensionVersion
 * @property string $Name
 * @property string $Namespace
 */
class GetExtensionVersionRequest extends Request
{
    /**
     * @param array{
     *     ExtensionVersion: string,
     *     Name: string,
     *     Namespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
