<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NONE'|'AWS_IAM' $authType
 * @property string $certificateArn
 * @property string $clientToken
 * @property string $customDomainName
 * @property string $name
 * @property array<string, string> $tags
 */
class CreateServiceRequest extends Request
{
    /**
     * @param array{
     *     authType?: 'NONE'|'AWS_IAM',
     *     certificateArn?: string,
     *     clientToken?: string,
     *     customDomainName?: string,
     *     name: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
