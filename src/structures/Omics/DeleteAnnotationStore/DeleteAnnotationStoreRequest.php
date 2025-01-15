<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteAnnotationStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property bool|null $force
 */
class DeleteAnnotationStoreRequest extends Request
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
