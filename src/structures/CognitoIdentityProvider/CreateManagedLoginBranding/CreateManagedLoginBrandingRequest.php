<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateManagedLoginBranding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ClientId
 * @property bool $UseCognitoProvidedValues
 * @property Shapes\Document $Settings
 * @property list<Shapes\AssetType> $Assets
 */
class CreateManagedLoginBrandingRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ClientId: string,
     *     UseCognitoProvidedValues?: bool,
     *     Settings?: Shapes\Document,
     *     Assets?: list<Shapes\AssetType>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
