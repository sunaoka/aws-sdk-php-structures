<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateKeyValueStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Comment
 * @property Shapes\ImportSource|null $ImportSource
 */
class CreateKeyValueStoreRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Comment?: string|null,
     *     ImportSource?: Shapes\ImportSource|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
