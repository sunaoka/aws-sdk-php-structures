<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateManagedLoginBranding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ManagedLoginBrandingId
 * @property bool $UseCognitoProvidedValues
 * @property Shapes\Document $Settings
 * @property list<Shapes\AssetType> $Assets
 */
class UpdateManagedLoginBrandingRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId?: string,
     *     ManagedLoginBrandingId?: string,
     *     UseCognitoProvidedValues?: bool,
     *     Settings?: Shapes\Document,
     *     Assets?: list<Shapes\AssetType>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
