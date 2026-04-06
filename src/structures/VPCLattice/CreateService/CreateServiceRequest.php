<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NONE'|'AWS_IAM'|null $authType
 * @property string|null $certificateArn
 * @property string|null $clientToken
 * @property string|null $customDomainName
 * @property string $name
 * @property array<string, string>|null $tags
 */
class CreateServiceRequest extends Request
{
    /**
     * @param array{
     *     authType?: 'NONE'|'AWS_IAM'|null,
     *     certificateArn?: string|null,
     *     clientToken?: string|null,
     *     customDomainName?: string|null,
     *     name: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
