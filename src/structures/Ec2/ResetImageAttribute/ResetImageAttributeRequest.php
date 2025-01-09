<?php

namespace Sunaoka\Aws\Structures\Ec2\ResetImageAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'launchPermission' $Attribute
 * @property string $ImageId
 * @property bool $DryRun
 */
class ResetImageAttributeRequest extends Request
{
    /**
     * @param array{
     *     Attribute: 'launchPermission',
     *     ImageId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
