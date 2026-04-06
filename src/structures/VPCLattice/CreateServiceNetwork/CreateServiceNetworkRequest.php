<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateServiceNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NONE'|'AWS_IAM'|null $authType
 * @property string|null $clientToken
 * @property string $name
 * @property Shapes\SharingConfig|null $sharingConfig
 * @property array<string, string>|null $tags
 */
class CreateServiceNetworkRequest extends Request
{
    /**
     * @param array{
     *     authType?: 'NONE'|'AWS_IAM'|null,
     *     clientToken?: string|null,
     *     name: string,
     *     sharingConfig?: Shapes\SharingConfig|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
