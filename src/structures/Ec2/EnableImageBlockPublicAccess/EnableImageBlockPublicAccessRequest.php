<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableImageBlockPublicAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'block-new-sharing' $ImageBlockPublicAccessState
 * @property bool|null $DryRun
 */
class EnableImageBlockPublicAccessRequest extends Request
{
    /**
     * @param array{
     *     ImageBlockPublicAccessState: 'block-new-sharing',
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
