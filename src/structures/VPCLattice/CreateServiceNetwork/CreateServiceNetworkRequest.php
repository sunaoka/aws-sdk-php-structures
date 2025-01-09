<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateServiceNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NONE'|'AWS_IAM' $authType
 * @property string $clientToken
 * @property string $name
 * @property Shapes\SharingConfig $sharingConfig
 * @property array<string, string> $tags
 */
class CreateServiceNetworkRequest extends Request
{
    /**
     * @param array{
     *     authType?: 'NONE'|'AWS_IAM',
     *     clientToken?: string,
     *     name: string,
     *     sharingConfig?: Shapes\SharingConfig,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
