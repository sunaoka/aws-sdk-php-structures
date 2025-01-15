<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateManagedLoginBranding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UserPoolId
 * @property string|null $ManagedLoginBrandingId
 * @property bool|null $UseCognitoProvidedValues
 * @property Shapes\Document|null $Settings
 * @property list<Shapes\AssetType>|null $Assets
 */
class UpdateManagedLoginBrandingRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId?: string|null,
     *     ManagedLoginBrandingId?: string|null,
     *     UseCognitoProvidedValues?: bool|null,
     *     Settings?: Shapes\Document|null,
     *     Assets?: list<Shapes\AssetType>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
