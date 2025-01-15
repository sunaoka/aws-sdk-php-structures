<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateManagedLoginBranding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ClientId
 * @property bool|null $UseCognitoProvidedValues
 * @property Shapes\Document|null $Settings
 * @property list<Shapes\AssetType>|null $Assets
 */
class CreateManagedLoginBrandingRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ClientId: string,
     *     UseCognitoProvidedValues?: bool|null,
     *     Settings?: Shapes\Document|null,
     *     Assets?: list<Shapes\AssetType>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
