<?php

namespace Sunaoka\Aws\Structures\SupplyChain\CreateInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceName
 * @property string $instanceDescription
 * @property string $kmsKeyArn
 * @property string $webAppDnsDomain
 * @property array<string, string> $tags
 * @property string $clientToken
 */
class CreateInstanceRequest extends Request
{
    /**
     * @param array{
     *     instanceName?: string,
     *     instanceDescription?: string,
     *     kmsKeyArn?: string,
     *     webAppDnsDomain?: string,
     *     tags?: array<string, string>,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
