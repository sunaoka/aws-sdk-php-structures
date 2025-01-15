<?php

namespace Sunaoka\Aws\Structures\Tnb\CreateSolNetworkInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nsDescription
 * @property string $nsName
 * @property string $nsdInfoId
 * @property array<string, string>|null $tags
 */
class CreateSolNetworkInstanceRequest extends Request
{
    /**
     * @param array{
     *     nsDescription?: string|null,
     *     nsName: string,
     *     nsdInfoId: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
