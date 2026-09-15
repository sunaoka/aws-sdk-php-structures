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
 * @property 'PayAsYouGo'|'FlatRateTier1'|'FlatRateTier2'|'FlatRateTier3'|'FlatRateTier4'|'FlatRateTier5'|null $billingMode
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
     *     requestMACSec?: bool|null,
     *     billingMode?: 'PayAsYouGo'|'FlatRateTier1'|'FlatRateTier2'|'FlatRateTier3'|'FlatRateTier4'|'FlatRateTier5'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
