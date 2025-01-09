<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateKeyValueStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Comment
 * @property Shapes\ImportSource $ImportSource
 */
class CreateKeyValueStoreRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Comment?: string,
     *     ImportSource?: Shapes\ImportSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
