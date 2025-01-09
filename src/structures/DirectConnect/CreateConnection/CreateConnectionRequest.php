<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $location
 * @property string $bandwidth
 * @property string $connectionName
 * @property string $lagId
 * @property list<Shapes\Tag> $tags
 * @property string $providerName
 * @property bool $requestMACSec
 */
class CreateConnectionRequest extends Request
{
    /**
     * @param array{
     *     location: string,
     *     bandwidth: string,
     *     connectionName: string,
     *     lagId?: string,
     *     tags?: list<Shapes\Tag>,
     *     providerName?: string,
     *     requestMACSec?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
