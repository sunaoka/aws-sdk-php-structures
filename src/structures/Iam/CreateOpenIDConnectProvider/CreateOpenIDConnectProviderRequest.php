<?php

namespace Sunaoka\Aws\Structures\Iam\CreateOpenIDConnectProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Url
 * @property list<string>|null $ClientIDList
 * @property list<string>|null $ThumbprintList
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateOpenIDConnectProviderRequest extends Request
{
    /**
     * @param array{
     *     Url: string,
     *     ClientIDList?: list<string>|null,
     *     ThumbprintList?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
