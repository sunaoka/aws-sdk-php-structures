<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateServiceNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $name
 * @property 'NONE'|'AWS_IAM'|null $authType
 * @property array<string, string>|null $tags
 * @property Shapes\SharingConfig|null $sharingConfig
 */
class CreateServiceNetworkRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     name: string,
     *     authType?: 'NONE'|'AWS_IAM'|null,
     *     tags?: array<string, string>|null,
     *     sharingConfig?: Shapes\SharingConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
