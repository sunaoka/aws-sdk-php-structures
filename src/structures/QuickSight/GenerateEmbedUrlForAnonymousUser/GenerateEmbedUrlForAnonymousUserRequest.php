<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForAnonymousUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property int<15, 600> $SessionLifetimeInMinutes
 * @property string $Namespace
 * @property list<Shapes\SessionTag> $SessionTags
 * @property list<string> $AuthorizedResourceArns
 * @property Shapes\AnonymousUserEmbeddingExperienceConfiguration $ExperienceConfiguration
 * @property list<string> $AllowedDomains
 */
class GenerateEmbedUrlForAnonymousUserRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     SessionLifetimeInMinutes?: int<15, 600>,
     *     Namespace: string,
     *     SessionTags?: list<Shapes\SessionTag>,
     *     AuthorizedResourceArns: list<string>,
     *     ExperienceConfiguration: Shapes\AnonymousUserEmbeddingExperienceConfiguration,
     *     AllowedDomains?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
