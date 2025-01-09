<?php

namespace Sunaoka\Aws\Structures\Tnb\CreateSolNetworkInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nsDescription
 * @property string $nsName
 * @property string $nsdInfoId
 * @property array<string, string> $tags
 */
class CreateSolNetworkInstanceRequest extends Request
{
    /**
     * @param array{
     *     nsDescription?: string,
     *     nsName: string,
     *     nsdInfoId: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
