<?php

namespace Sunaoka\Aws\Structures\Iam\CreateOpenIDConnectProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Url
 * @property list<string> $ClientIDList
 * @property list<string> $ThumbprintList
 * @property list<Shapes\Tag> $Tags
 */
class CreateOpenIDConnectProviderRequest extends Request
{
    /**
     * @param array{
     *     Url: string,
     *     ClientIDList?: list<string>,
     *     ThumbprintList?: list<string>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
