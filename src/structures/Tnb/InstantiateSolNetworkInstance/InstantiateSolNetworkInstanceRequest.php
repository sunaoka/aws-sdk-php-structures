<?php

namespace Sunaoka\Aws\Structures\Tnb\InstantiateSolNetworkInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Document $additionalParamsForNs
 * @property bool $dryRun
 * @property string $nsInstanceId
 * @property array<string, string> $tags
 */
class InstantiateSolNetworkInstanceRequest extends Request
{
    /**
     * @param array{
     *     additionalParamsForNs?: Shapes\Document,
     *     dryRun?: bool,
     *     nsInstanceId: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
