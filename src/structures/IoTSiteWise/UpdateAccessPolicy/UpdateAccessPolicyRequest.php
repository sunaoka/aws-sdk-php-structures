<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accessPolicyId
 * @property Shapes\Identity $accessPolicyIdentity
 * @property Shapes\Resource $accessPolicyResource
 * @property 'ADMINISTRATOR'|'VIEWER' $accessPolicyPermission
 * @property string $clientToken
 */
class UpdateAccessPolicyRequest extends Request
{
    /**
     * @param array{
     *     accessPolicyId: string,
     *     accessPolicyIdentity: Shapes\Identity,
     *     accessPolicyResource: Shapes\Resource,
     *     accessPolicyPermission: 'ADMINISTRATOR'|'VIEWER',
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
