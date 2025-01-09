<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Identity $accessPolicyIdentity
 * @property Shapes\Resource $accessPolicyResource
 * @property 'ADMINISTRATOR'|'VIEWER' $accessPolicyPermission
 * @property string $clientToken
 * @property array<string, string> $tags
 */
class CreateAccessPolicyRequest extends Request
{
    /**
     * @param array{
     *     accessPolicyIdentity: Shapes\Identity,
     *     accessPolicyResource: Shapes\Resource,
     *     accessPolicyPermission: 'ADMINISTRATOR'|'VIEWER',
     *     clientToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
