<?php

namespace Sunaoka\Aws\Structures\MediaStoreData\DeleteObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Path
 */
class DeleteObjectRequest extends Request
{
    /**
     * @param array{Path: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
