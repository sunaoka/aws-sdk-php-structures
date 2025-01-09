<?php

namespace Sunaoka\Aws\Structures\LocationService\GetMapStyleDescriptor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MapName
 * @property string $Key
 */
class GetMapStyleDescriptorRequest extends Request
{
    /**
     * @param array{
     *     MapName: string,
     *     Key?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
