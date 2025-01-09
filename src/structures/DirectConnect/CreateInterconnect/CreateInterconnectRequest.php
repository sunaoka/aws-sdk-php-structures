<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateInterconnect;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $interconnectName
 * @property string $bandwidth
 * @property string $location
 * @property string $lagId
 * @property list<Shapes\Tag> $tags
 * @property string $providerName
 */
class CreateInterconnectRequest extends Request
{
    /**
     * @param array{
     *     interconnectName: string,
     *     bandwidth: string,
     *     location: string,
     *     lagId?: string,
     *     tags?: list<Shapes\Tag>,
     *     providerName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
