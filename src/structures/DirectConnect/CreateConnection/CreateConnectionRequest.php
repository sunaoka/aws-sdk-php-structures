<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $location
 * @property string $bandwidth
 * @property string $connectionName
 * @property string|null $lagId
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $providerName
 * @property bool|null $requestMACSec
 */
class CreateConnectionRequest extends Request
{
    /**
     * @param array{
     *     location: string,
     *     bandwidth: string,
     *     connectionName: string,
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
