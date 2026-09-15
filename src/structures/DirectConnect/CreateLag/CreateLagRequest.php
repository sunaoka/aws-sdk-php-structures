<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateLag;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $numberOfConnections
 * @property string $location
 * @property string $connectionsBandwidth
 * @property string $lagName
 * @property string|null $connectionId
 * @property list<Shapes\Tag>|null $tags
 * @property list<Shapes\Tag>|null $childConnectionTags
 * @property string|null $providerName
 * @property bool|null $requestMACSec
 * @property 'PayAsYouGo'|'FlatRateTier1'|'FlatRateTier2'|'FlatRateTier3'|'FlatRateTier4'|'FlatRateTier5'|null $billingMode
 */
class CreateLagRequest extends Request
{
    /**
     * @param array{
     *     numberOfConnections: int,
     *     location: string,
     *     connectionsBandwidth: string,
     *     lagName: string,
     *     connectionId?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     childConnectionTags?: list<Shapes\Tag>|null,
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
