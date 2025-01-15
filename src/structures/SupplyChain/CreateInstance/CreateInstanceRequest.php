<?php

namespace Sunaoka\Aws\Structures\SupplyChain\CreateInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $instanceName
 * @property string|null $instanceDescription
 * @property string|null $kmsKeyArn
 * @property string|null $webAppDnsDomain
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreateInstanceRequest extends Request
{
    /**
     * @param array{
     *     instanceName?: string|null,
     *     instanceDescription?: string|null,
     *     kmsKeyArn?: string|null,
     *     webAppDnsDomain?: string|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
