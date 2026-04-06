<?php

namespace Sunaoka\Aws\Structures\Ec2\GetImageBlockPublicAccessState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 */
class GetImageBlockPublicAccessStateRequest extends Request
{
    /**
     * @param array{DryRun?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
