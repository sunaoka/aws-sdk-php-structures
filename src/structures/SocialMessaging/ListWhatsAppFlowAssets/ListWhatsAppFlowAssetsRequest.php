<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\ListWhatsAppFlowAssets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $flowId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListWhatsAppFlowAssetsRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     flowId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
