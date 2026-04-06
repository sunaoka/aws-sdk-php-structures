<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateSAMLProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SAMLMetadataDocument
 * @property string $SAMLProviderArn
 * @property 'Required'|'Allowed'|null $AssertionEncryptionMode
 * @property string|null $AddPrivateKey
 * @property string|null $RemovePrivateKey
 */
class UpdateSAMLProviderRequest extends Request
{
    /**
     * @param array{
     *     SAMLMetadataDocument?: string|null,
     *     SAMLProviderArn: string,
     *     AssertionEncryptionMode?: 'Required'|'Allowed'|null,
     *     AddPrivateKey?: string|null,
     *     RemovePrivateKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
