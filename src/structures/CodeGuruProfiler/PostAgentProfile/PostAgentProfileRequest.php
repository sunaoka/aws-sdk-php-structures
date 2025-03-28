<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\PostAgentProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $agentProfile
 * @property string $contentType
 * @property string|null $profileToken
 * @property string $profilingGroupName
 */
class PostAgentProfileRequest extends Request
{
    /**
     * @param array{
     *     agentProfile: string|resource|\Psr\Http\Message\StreamInterface,
     *     contentType: string,
     *     profileToken?: string|null,
     *     profilingGroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
