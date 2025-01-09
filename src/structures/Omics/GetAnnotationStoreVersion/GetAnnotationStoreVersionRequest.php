<?php

namespace Sunaoka\Aws\Structures\Omics\GetAnnotationStoreVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $versionName
 */
class GetAnnotationStoreVersionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     versionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
