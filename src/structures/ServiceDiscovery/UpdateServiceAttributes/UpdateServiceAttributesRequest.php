<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdateServiceAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceId
 * @property array<string, string> $Attributes
 */
class UpdateServiceAttributesRequest extends Request
{
    /**
     * @param array{
     *     ServiceId: string,
     *     Attributes: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
