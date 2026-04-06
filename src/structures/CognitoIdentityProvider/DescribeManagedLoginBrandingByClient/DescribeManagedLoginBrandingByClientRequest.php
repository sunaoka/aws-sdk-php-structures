<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeManagedLoginBrandingByClient;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ClientId
 * @property bool|null $ReturnMergedResources
 */
class DescribeManagedLoginBrandingByClientRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ClientId: string,
     *     ReturnMergedResources?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
