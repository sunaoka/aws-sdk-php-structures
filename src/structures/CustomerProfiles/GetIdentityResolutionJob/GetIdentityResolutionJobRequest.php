<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetIdentityResolutionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $JobId
 */
class GetIdentityResolutionJobRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     JobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
