<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeUserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string $UserProfileName
 */
class DescribeUserProfileRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     UserProfileName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
