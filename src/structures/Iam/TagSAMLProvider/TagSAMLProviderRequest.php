<?php

namespace Sunaoka\Aws\Structures\Iam\TagSAMLProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SAMLProviderArn
 * @property list<Shapes\Tag> $Tags
 */
class TagSAMLProviderRequest extends Request
{
    /**
     * @param array{
     *     SAMLProviderArn: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
