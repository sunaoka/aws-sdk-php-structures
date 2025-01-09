<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeFargateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $fargateProfileName
 */
class DescribeFargateProfileRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     fargateProfileName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
