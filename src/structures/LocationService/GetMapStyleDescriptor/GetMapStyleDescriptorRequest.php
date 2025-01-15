<?php

namespace Sunaoka\Aws\Structures\LocationService\GetMapStyleDescriptor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MapName
 * @property string|null $Key
 */
class GetMapStyleDescriptorRequest extends Request
{
    /**
     * @param array{
     *     MapName: string,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
