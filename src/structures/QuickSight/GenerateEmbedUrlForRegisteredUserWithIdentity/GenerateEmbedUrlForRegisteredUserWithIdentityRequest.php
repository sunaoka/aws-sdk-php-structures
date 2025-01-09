<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUserWithIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property int<15, 600> $SessionLifetimeInMinutes
 * @property Shapes\RegisteredUserEmbeddingExperienceConfiguration $ExperienceConfiguration
 * @property list<string> $AllowedDomains
 */
class GenerateEmbedUrlForRegisteredUserWithIdentityRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     SessionLifetimeInMinutes?: int<15, 600>,
     *     ExperienceConfiguration: Shapes\RegisteredUserEmbeddingExperienceConfiguration,
     *     AllowedDomains?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
