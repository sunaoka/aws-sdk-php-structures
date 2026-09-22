<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateOneTimeDeepLinkCode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property int<60, 600>|null $ttlSeconds
 * @property string|null $redirectUrl
 */
class CreateOneTimeDeepLinkCodeRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     ttlSeconds?: int<60, 600>|null,
     *     redirectUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
