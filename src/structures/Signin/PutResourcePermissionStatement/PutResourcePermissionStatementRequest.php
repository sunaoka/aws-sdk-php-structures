<?php

namespace Sunaoka\Aws\Structures\Signin\PutResourcePermissionStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $sourceVpc
 * @property string|null $signinSourceVpce
 * @property string|null $consoleSourceVpce
 * @property string|null $vpcSourceIp
 * @property string|null $sourceIp
 * @property string|null $requestedRegion
 * @property string|null $excludedPrincipal
 * @property string|null $clientToken
 */
class PutResourcePermissionStatementRequest extends Request
{
    /**
     * @param array{
     *     sourceVpc?: string|null,
     *     signinSourceVpce?: string|null,
     *     consoleSourceVpce?: string|null,
     *     vpcSourceIp?: string|null,
     *     sourceIp?: string|null,
     *     requestedRegion?: string|null,
     *     excludedPrincipal?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
