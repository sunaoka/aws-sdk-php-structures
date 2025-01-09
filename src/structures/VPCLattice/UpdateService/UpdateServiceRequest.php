<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NONE'|'AWS_IAM' $authType
 * @property string $certificateArn
 * @property string $serviceIdentifier
 */
class UpdateServiceRequest extends Request
{
    /**
     * @param array{
     *     authType?: 'NONE'|'AWS_IAM',
     *     certificateArn?: string,
     *     serviceIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
