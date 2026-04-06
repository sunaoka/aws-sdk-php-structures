<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetTopPathStatisticsByTraffic;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebAclArn
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string|null $UriPathPrefix
 * @property Shapes\TimeWindow $TimeWindow
 * @property string|null $BotCategory
 * @property string|null $BotOrganization
 * @property string|null $BotName
 * @property int<1, 100> $Limit
 * @property int<1, 10> $NumberOfTopTrafficBotsPerPath
 * @property string|null $NextMarker
 */
class GetTopPathStatisticsByTrafficRequest extends Request
{
    /**
     * @param array{
     *     WebAclArn: string,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     UriPathPrefix?: string|null,
     *     TimeWindow: Shapes\TimeWindow,
     *     BotCategory?: string|null,
     *     BotOrganization?: string|null,
     *     BotName?: string|null,
     *     Limit: int<1, 100>,
     *     NumberOfTopTrafficBotsPerPath: int<1, 10>,
     *     NextMarker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
