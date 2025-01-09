<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteVariantStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property bool $force
 */
class DeleteVariantStoreRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     force?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
