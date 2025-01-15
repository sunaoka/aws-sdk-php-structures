<?php

namespace Sunaoka\Aws\Structures\Ec2\DeregisterInstanceEventNotificationAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property Shapes\DeregisterInstanceTagAttributeRequest $InstanceTagAttribute
 */
class DeregisterInstanceEventNotificationAttributesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     InstanceTagAttribute: Shapes\DeregisterInstanceTagAttributeRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
