<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateServiceNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NONE'|'AWS_IAM'|null $authType
 * @property string|null $clientToken
 * @property string $name
 * @property array<string, string>|null $tags
 */
class CreateServiceNetworkRequest extends Request
{
    /**
     * @param array{
     *     authType?: 'NONE'|'AWS_IAM'|null,
     *     clientToken?: string|null,
     *     name: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
