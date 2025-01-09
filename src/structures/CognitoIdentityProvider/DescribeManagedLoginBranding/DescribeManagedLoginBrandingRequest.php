<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeManagedLoginBranding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ManagedLoginBrandingId
 * @property bool $ReturnMergedResources
 */
class DescribeManagedLoginBrandingRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ManagedLoginBrandingId: string,
     *     ReturnMergedResources?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
