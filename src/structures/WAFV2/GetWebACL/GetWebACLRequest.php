<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property 'CLOUDFRONT'|'REGIONAL'|null $Scope
 * @property string|null $Id
 * @property string|null $ARN
 */
class GetWebACLRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Scope?: 'CLOUDFRONT'|'REGIONAL'|null,
     *     Id?: string|null,
     *     ARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
