<?php

namespace Sunaoka\Aws\Structures\ConfigService\BatchGetResourceConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ResourceKey> $resourceKeys
 */
class BatchGetResourceConfigRequest extends Request
{
    /**
     * @param array{resourceKeys: list<Shapes\ResourceKey>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
