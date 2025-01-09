<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdatePortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Standard'|'IAM_Identity_Center' $authenticationType
 * @property string $displayName
 * @property 'standard.regular'|'standard.large'|'standard.xlarge' $instanceType
 * @property int<1, 5000> $maxConcurrentSessions
 * @property string $portalArn
 */
class UpdatePortalRequest extends Request
{
    /**
     * @param array{
     *     authenticationType?: 'Standard'|'IAM_Identity_Center',
     *     displayName?: string,
     *     instanceType?: 'standard.regular'|'standard.large'|'standard.xlarge',
     *     maxConcurrentSessions?: int<1, 5000>,
     *     portalArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
