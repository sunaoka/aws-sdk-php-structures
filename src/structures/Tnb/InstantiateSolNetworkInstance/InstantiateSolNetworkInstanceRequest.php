<?php

namespace Sunaoka\Aws\Structures\Tnb\InstantiateSolNetworkInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Document|null $additionalParamsForNs
 * @property bool|null $dryRun
 * @property string $nsInstanceId
 * @property array<string, string>|null $tags
 */
class InstantiateSolNetworkInstanceRequest extends Request
{
    /**
     * @param array{
     *     additionalParamsForNs?: Shapes\Document|null,
     *     dryRun?: bool|null,
     *     nsInstanceId: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
