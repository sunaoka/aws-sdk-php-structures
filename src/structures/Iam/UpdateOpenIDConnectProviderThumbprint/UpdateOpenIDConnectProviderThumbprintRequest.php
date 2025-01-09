<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateOpenIDConnectProviderThumbprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OpenIDConnectProviderArn
 * @property list<string> $ThumbprintList
 */
class UpdateOpenIDConnectProviderThumbprintRequest extends Request
{
    /**
     * @param array{
     *     OpenIDConnectProviderArn: string,
     *     ThumbprintList: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
