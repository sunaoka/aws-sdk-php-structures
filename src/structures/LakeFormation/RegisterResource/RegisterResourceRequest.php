<?php

namespace Sunaoka\Aws\Structures\LakeFormation\RegisterResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property bool|null $UseServiceLinkedRole
 * @property string|null $RoleArn
 * @property bool|null $WithFederation
 * @property bool|null $HybridAccessEnabled
 * @property bool|null $WithPrivilegedAccess
 * @property string|null $ExpectedResourceOwnerAccount
 */
class RegisterResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     UseServiceLinkedRole?: bool|null,
     *     RoleArn?: string|null,
     *     WithFederation?: bool|null,
     *     HybridAccessEnabled?: bool|null,
     *     WithPrivilegedAccess?: bool|null,
     *     ExpectedResourceOwnerAccount?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
