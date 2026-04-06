<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateSdiSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'QUADRANT'|'INTERLEAVE'|null $Mode
 * @property string|null $Name
 * @property string|null $RequestId
 * @property array<string, string>|null $Tags
 * @property 'SINGLE'|'QUAD'|null $Type
 */
class CreateSdiSourceRequest extends Request
{
    /**
     * @param array{
     *     Mode?: 'QUADRANT'|'INTERLEAVE'|null,
     *     Name?: string|null,
     *     RequestId?: string|null,
     *     Tags?: array<string, string>|null,
     *     Type?: 'SINGLE'|'QUAD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
