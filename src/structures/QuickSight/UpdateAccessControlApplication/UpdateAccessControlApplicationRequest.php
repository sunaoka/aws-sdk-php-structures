<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAccessControlApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ApplicationId
 * @property string|null $Name
 * @property string|null $Description
 * @property Shapes\IdpAuthorizingConfigUpdateInput|null $IdpAuthorizingConfiguration
 * @property Shapes\QuickAuthenticationConfigInput|null $QuickAuthenticationConfiguration
 * @property 'ENABLED'|'DISABLED'|null $Status
 */
class UpdateAccessControlApplicationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ApplicationId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     IdpAuthorizingConfiguration?: Shapes\IdpAuthorizingConfigUpdateInput|null,
     *     QuickAuthenticationConfiguration?: Shapes\QuickAuthenticationConfigInput|null,
     *     Status?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
