<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateSAMLProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SAMLMetadataDocument
 * @property string $SAMLProviderArn
 * @property 'Required'|'Allowed'|null $AssertionEncryptionMode
 * @property string|null $AddPrivateKey
 * @property string|null $RemovePrivateKey
 * @property Shapes\ContextProvider|null $ContextProvider
 * @property string|null $IdentityCenterInstanceArn
 * @property bool|null $RemoveContextProvider
 * @property bool|null $RemoveIdentityCenterInstance
 */
class UpdateSAMLProviderRequest extends Request
{
    /**
     * @param array{
     *     SAMLMetadataDocument?: string|null,
     *     SAMLProviderArn: string,
     *     AssertionEncryptionMode?: 'Required'|'Allowed'|null,
     *     AddPrivateKey?: string|null,
     *     RemovePrivateKey?: string|null,
     *     ContextProvider?: Shapes\ContextProvider|null,
     *     IdentityCenterInstanceArn?: string|null,
     *     RemoveContextProvider?: bool|null,
     *     RemoveIdentityCenterInstance?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
