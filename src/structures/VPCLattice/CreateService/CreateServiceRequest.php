<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $name
 * @property array<string, string>|null $tags
 * @property string|null $customDomainName
 * @property string|null $certificateArn
 * @property 'NONE'|'AWS_IAM'|null $authType
 */
class CreateServiceRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     name: string,
     *     tags?: array<string, string>|null,
     *     customDomainName?: string|null,
     *     certificateArn?: string|null,
     *     authType?: 'NONE'|'AWS_IAM'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
