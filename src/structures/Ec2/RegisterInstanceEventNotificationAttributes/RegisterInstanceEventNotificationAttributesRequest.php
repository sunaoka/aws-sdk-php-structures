<?php

namespace Sunaoka\Aws\Structures\Ec2\RegisterInstanceEventNotificationAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property Shapes\RegisterInstanceTagAttributeRequest $InstanceTagAttribute
 */
class RegisterInstanceEventNotificationAttributesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     InstanceTagAttribute: Shapes\RegisterInstanceTagAttributeRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
