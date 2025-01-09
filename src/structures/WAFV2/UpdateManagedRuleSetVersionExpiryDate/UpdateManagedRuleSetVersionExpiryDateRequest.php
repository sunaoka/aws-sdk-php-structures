<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateManagedRuleSetVersionExpiryDate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string $Id
 * @property string $LockToken
 * @property string $VersionToExpire
 * @property \Aws\Api\DateTimeResult $ExpiryTimestamp
 */
class UpdateManagedRuleSetVersionExpiryDateRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     Id: string,
     *     LockToken: string,
     *     VersionToExpire: string,
     *     ExpiryTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
