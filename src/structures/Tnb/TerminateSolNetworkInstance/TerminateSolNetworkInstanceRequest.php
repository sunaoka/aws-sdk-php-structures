<?php

namespace Sunaoka\Aws\Structures\Tnb\TerminateSolNetworkInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nsInstanceId
 * @property array<string, string>|null $tags
 */
class TerminateSolNetworkInstanceRequest extends Request
{
    /**
     * @param array{
     *     nsInstanceId: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
