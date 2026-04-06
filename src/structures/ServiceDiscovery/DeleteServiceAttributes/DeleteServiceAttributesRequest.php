<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\DeleteServiceAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceId
 * @property list<string> $Attributes
 */
class DeleteServiceAttributesRequest extends Request
{
    /**
     * @param array{
     *     ServiceId: string,
     *     Attributes: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
