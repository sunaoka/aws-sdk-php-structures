<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdatePortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Standard'|'IAM_Identity_Center'|null $authenticationType
 * @property string|null $displayName
 * @property 'standard.regular'|'standard.large'|'standard.xlarge'|null $instanceType
 * @property int<1, 5000>|null $maxConcurrentSessions
 * @property string $portalArn
 */
class UpdatePortalRequest extends Request
{
    /**
     * @param array{
     *     authenticationType?: 'Standard'|'IAM_Identity_Center'|null,
     *     displayName?: string|null,
     *     instanceType?: 'standard.regular'|'standard.large'|'standard.xlarge'|null,
     *     maxConcurrentSessions?: int<1, 5000>|null,
     *     portalArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
