<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdatePortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalArn
 * @property string|null $displayName
 * @property 'Standard'|'IAM_Identity_Center'|null $authenticationType
 * @property 'standard.regular'|'standard.large'|'standard.xlarge'|null $instanceType
 * @property int<1, 5000>|null $maxConcurrentSessions
 * @property string|null $portalCustomDomain
 */
class UpdatePortalRequest extends Request
{
    /**
     * @param array{
     *     portalArn: string,
     *     displayName?: string|null,
     *     authenticationType?: 'Standard'|'IAM_Identity_Center'|null,
     *     instanceType?: 'standard.regular'|'standard.large'|'standard.xlarge'|null,
     *     maxConcurrentSessions?: int<1, 5000>|null,
     *     portalCustomDomain?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
