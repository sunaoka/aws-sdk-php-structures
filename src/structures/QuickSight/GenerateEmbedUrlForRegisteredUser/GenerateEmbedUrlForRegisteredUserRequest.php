<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property int<15, 600>|null $SessionLifetimeInMinutes
 * @property string $UserArn
 * @property Shapes\RegisteredUserEmbeddingExperienceConfiguration $ExperienceConfiguration
 * @property list<string>|null $AllowedDomains
 */
class GenerateEmbedUrlForRegisteredUserRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     SessionLifetimeInMinutes?: int<15, 600>|null,
     *     UserArn: string,
     *     ExperienceConfiguration: Shapes\RegisteredUserEmbeddingExperienceConfiguration,
     *     AllowedDomains?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
