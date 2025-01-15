<?php

namespace Sunaoka\Aws\Structures\MediaStoreData\GetObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Path
 * @property string|null $Range
 */
class GetObjectRequest extends Request
{
    /**
     * @param array{
     *     Path: string,
     *     Range?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
