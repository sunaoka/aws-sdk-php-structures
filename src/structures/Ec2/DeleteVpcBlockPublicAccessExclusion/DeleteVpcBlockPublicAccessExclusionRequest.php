<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpcBlockPublicAccessExclusion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $ExclusionId
 */
class DeleteVpcBlockPublicAccessExclusionRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ExclusionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
