<?php

namespace Sunaoka\Aws\Structures\LocationService\GetMapStyleDescriptor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Key
 * @property string $MapName
 */
class GetMapStyleDescriptorRequest extends Request
{
    /**
     * @param array{
     *     Key?: string|null,
     *     MapName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
