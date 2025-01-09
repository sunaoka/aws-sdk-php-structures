<?php

namespace Sunaoka\Aws\Structures\Iam\CreateSAMLProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SAMLMetadataDocument
 * @property string $Name
 * @property list<Shapes\Tag> $Tags
 */
class CreateSAMLProviderRequest extends Request
{
    /**
     * @param array{
     *     SAMLMetadataDocument: string,
     *     Name: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
