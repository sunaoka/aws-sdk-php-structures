<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateInterconnect;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $interconnectName
 * @property string $bandwidth
 * @property string $location
 * @property string|null $lagId
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $providerName
 * @property bool|null $requestMACSec
 */
class CreateInterconnectRequest extends Request
{
    /**
     * @param array{
     *     interconnectName: string,
     *     bandwidth: string,
     *     location: string,
     *     lagId?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     providerName?: string|null,
     *     requestMACSec?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
