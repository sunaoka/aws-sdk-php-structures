<?php

namespace Sunaoka\Aws\Structures\CloudFront\AssociateDistributionWebACL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $WebACLArn
 * @property string|null $IfMatch
 */
class AssociateDistributionWebACLRequest extends Request
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
