<?php

namespace Sunaoka\Aws\Structures\EKS\CreateFargateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fargateProfileName
 * @property string $clusterName
 * @property string $podExecutionRoleArn
 * @property list<string> $subnets
 * @property list<Shapes\FargateProfileSelector> $selectors
 * @property string $clientRequestToken
 * @property array<string, string> $tags
 */
class CreateFargateProfileRequest extends Request
{
    /**
     * @param array{
     *     fargateProfileName: string,
     *     clusterName: string,
     *     podExecutionRoleArn: string,
     *     subnets?: list<string>,
     *     selectors?: list<Shapes\FargateProfileSelector>,
     *     clientRequestToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
