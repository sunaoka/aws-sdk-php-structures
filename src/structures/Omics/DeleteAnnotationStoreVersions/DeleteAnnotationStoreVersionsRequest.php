<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteAnnotationStoreVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property list<string> $versions
 * @property bool|null $force
 */
class DeleteAnnotationStoreVersionsRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     versions: list<string>,
     *     force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
