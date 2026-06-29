<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceIdentifier
 * @property string|null $certificateArn
 * @property 'NONE'|'AWS_IAM'|null $authType
 * @property int<60, 600>|null $idleTimeoutSeconds
 */
class UpdateServiceRequest extends Request
{
    /**
     * @param array{
     *     serviceIdentifier: string,
     *     certificateArn?: string|null,
     *     authType?: 'NONE'|'AWS_IAM'|null,
     *     idleTimeoutSeconds?: int<60, 600>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
