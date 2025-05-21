<?php

namespace Sunaoka\Aws\Structures\CloudFront\AssociateDistributionTenantWebACL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $WebACLArn
 * @property string|null $IfMatch
 */
class AssociateDistributionTenantWebACLRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     WebACLArn: string,
     *     IfMatch?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
