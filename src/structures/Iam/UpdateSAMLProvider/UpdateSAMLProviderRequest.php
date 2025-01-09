<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateSAMLProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SAMLMetadataDocument
 * @property string $SAMLProviderArn
 */
class UpdateSAMLProviderRequest extends Request
{
    /**
     * @param array{
     *     SAMLMetadataDocument: string,
     *     SAMLProviderArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
