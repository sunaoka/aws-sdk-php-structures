<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\PostAgentProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentProfile
 * @property string $contentType
 * @property string $profileToken
 * @property string $profilingGroupName
 */
class PostAgentProfileRequest extends Request
{
    /**
     * @param array{
     *     agentProfile: string,
     *     contentType: string,
     *     profileToken?: string,
     *     profilingGroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
