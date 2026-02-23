<?php

namespace Sunaoka\Aws\Structures\Wickr\RegisterOpentdfConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property string $clientId
 * @property string $clientSecret
 * @property string $domain
 * @property string $provider
 * @property bool|null $dryRun
 */
class RegisterOpentdfConfigRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     clientId: string,
     *     clientSecret: string,
     *     domain: string,
     *     provider: string,
     *     dryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
