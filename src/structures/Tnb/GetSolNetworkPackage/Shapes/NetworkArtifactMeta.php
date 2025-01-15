<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ToscaOverride>|null $overrides
 */
class NetworkArtifactMeta extends Shape
{
    /**
     * @param array{overrides?: list<ToscaOverride>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
