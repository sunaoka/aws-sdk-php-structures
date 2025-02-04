<?php

namespace Sunaoka\Aws\Structures\Iam\CreateSAMLProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SAMLMetadataDocument
 * @property string $Name
 * @property list<Shapes\Tag>|null $Tags
 * @property 'Required'|'Allowed'|null $AssertionEncryptionMode
 * @property string|null $AddPrivateKey
 */
class CreateSAMLProviderRequest extends Request
{
    /**
     * @param array{
     *     SAMLMetadataDocument: string,
     *     Name: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     AssertionEncryptionMode?: 'Required'|'Allowed'|null,
     *     AddPrivateKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
