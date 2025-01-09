<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableImageBlockPublicAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'block-new-sharing' $ImageBlockPublicAccessState
 * @property bool $DryRun
 */
class EnableImageBlockPublicAccessRequest extends Request
{
    /**
     * @param array{
     *     ImageBlockPublicAccessState: 'block-new-sharing',
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
