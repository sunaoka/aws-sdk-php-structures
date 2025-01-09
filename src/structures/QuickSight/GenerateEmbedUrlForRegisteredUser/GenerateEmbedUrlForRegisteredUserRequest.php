<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property int $SessionLifetimeInMinutes
 * @property string $UserArn
 * @property Shapes\RegisteredUserEmbeddingExperienceConfiguration $ExperienceConfiguration
 * @property list<string> $AllowedDomains
 */
class GenerateEmbedUrlForRegisteredUserRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     SessionLifetimeInMinutes?: int,
     *     UserArn: string,
     *     ExperienceConfiguration: Shapes\RegisteredUserEmbeddingExperienceConfiguration,
     *     AllowedDomains?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
