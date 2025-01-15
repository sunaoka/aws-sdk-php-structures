<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteVariantStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property bool|null $force
 */
class DeleteVariantStoreRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
