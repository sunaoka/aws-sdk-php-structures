<?php

namespace Sunaoka\Aws\Structures\Ec2\DeregisterInstanceEventNotificationAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property Shapes\DeregisterInstanceTagAttributeRequest $InstanceTagAttribute
 */
class DeregisterInstanceEventNotificationAttributesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     InstanceTagAttribute: Shapes\DeregisterInstanceTagAttributeRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
