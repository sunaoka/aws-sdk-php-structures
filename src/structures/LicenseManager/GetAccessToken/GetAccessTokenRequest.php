<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetAccessToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Token
 * @property list<string>|null $TokenProperties
 */
class GetAccessTokenRequest extends Request
{
    /**
     * @param array{
     *     Token: string,
     *     TokenProperties?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
