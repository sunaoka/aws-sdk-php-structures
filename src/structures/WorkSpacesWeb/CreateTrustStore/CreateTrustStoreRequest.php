<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateTrustStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string|resource|\Psr\Http\Message\StreamInterface> $certificateList
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 */
class CreateTrustStoreRequest extends Request
{
    /**
     * @param array{
     *     certificateList: list<string|resource|\Psr\Http\Message\StreamInterface>,
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
