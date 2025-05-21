<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Identity $accessPolicyIdentity
 * @property Shapes\ResourceShape $accessPolicyResource
 * @property 'ADMINISTRATOR'|'VIEWER' $accessPolicyPermission
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateAccessPolicyRequest extends Request
{
    /**
     * @param array{
     *     accessPolicyIdentity: Shapes\Identity,
     *     accessPolicyResource: Shapes\ResourceShape,
     *     accessPolicyPermission: 'ADMINISTRATOR'|'VIEWER',
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
