<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NONE'|'AWS_IAM'|null $authType
 * @property string|null $certificateArn
 * @property string $serviceIdentifier
 */
class UpdateServiceRequest extends Request
{
    /**
     * @param array{
     *     authType?: 'NONE'|'AWS_IAM'|null,
     *     certificateArn?: string|null,
     *     serviceIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
