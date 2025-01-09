<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxScalingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $environmentId
 * @property string $scalingGroupName
 * @property string $hostType
 * @property string $availabilityZoneId
 * @property array<string, string> $tags
 */
class CreateKxScalingGroupRequest extends Request
{
    /**
     * @param array{
     *     clientToken: string,
     *     environmentId: string,
     *     scalingGroupName: string,
     *     hostType: string,
     *     availabilityZoneId: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
