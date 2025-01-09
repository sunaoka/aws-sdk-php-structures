<?php

namespace Sunaoka\Aws\Structures\Iam\TagOpenIDConnectProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OpenIDConnectProviderArn
 * @property list<Shapes\Tag> $Tags
 */
class TagOpenIDConnectProviderRequest extends Request
{
    /**
     * @param array{
     *     OpenIDConnectProviderArn: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
