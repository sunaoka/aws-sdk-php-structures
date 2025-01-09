<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUserWithIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property int $SessionLifetimeInMinutes
 * @property Shapes\RegisteredUserEmbeddingExperienceConfiguration $ExperienceConfiguration
 * @property list<string> $AllowedDomains
 */
class GenerateEmbedUrlForRegisteredUserWithIdentityRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     SessionLifetimeInMinutes?: int,
     *     ExperienceConfiguration: Shapes\RegisteredUserEmbeddingExperienceConfiguration,
     *     AllowedDomains?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
