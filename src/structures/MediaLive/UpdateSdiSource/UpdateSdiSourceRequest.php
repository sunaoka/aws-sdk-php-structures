<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateSdiSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'QUADRANT'|'INTERLEAVE'|null $Mode
 * @property string|null $Name
 * @property string $SdiSourceId
 * @property 'SINGLE'|'QUAD'|null $Type
 */
class UpdateSdiSourceRequest extends Request
{
    /**
     * @param array{
     *     Mode?: 'QUADRANT'|'INTERLEAVE'|null,
     *     Name?: string|null,
     *     SdiSourceId: string,
     *     Type?: 'SINGLE'|'QUAD'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
