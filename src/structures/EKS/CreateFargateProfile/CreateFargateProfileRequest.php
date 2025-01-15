<?php

namespace Sunaoka\Aws\Structures\EKS\CreateFargateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fargateProfileName
 * @property string $clusterName
 * @property string $podExecutionRoleArn
 * @property list<string>|null $subnets
 * @property list<Shapes\FargateProfileSelector>|null $selectors
 * @property string|null $clientRequestToken
 * @property array<string, string>|null $tags
 */
class CreateFargateProfileRequest extends Request
{
    /**
     * @param array{
     *     fargateProfileName: string,
     *     clusterName: string,
     *     podExecutionRoleArn: string,
     *     subnets?: list<string>|null,
     *     selectors?: list<Shapes\FargateProfileSelector>|null,
     *     clientRequestToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
