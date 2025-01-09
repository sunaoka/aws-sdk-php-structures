<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateKeyValueStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Comment
 * @property string $IfMatch
 */
class UpdateKeyValueStoreRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Comment: string,
     *     IfMatch: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
