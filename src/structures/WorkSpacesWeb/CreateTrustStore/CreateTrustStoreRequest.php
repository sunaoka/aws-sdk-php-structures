<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateTrustStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string|resource|\Psr\Http\Message\StreamInterface> $certificateList
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $clientToken
 */
class CreateTrustStoreRequest extends Request
{
    /**
     * @param array{
     *     certificateList: list<string|resource|\Psr\Http\Message\StreamInterface>,
     *     tags?: list<Shapes\Tag>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
