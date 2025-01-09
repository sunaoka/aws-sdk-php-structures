<?php

namespace Sunaoka\Aws\Structures\Ec2\GetImageBlockPublicAccessState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 */
class GetImageBlockPublicAccessStateRequest extends Request
{
    /**
     * @param array{DryRun?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
