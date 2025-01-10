<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateTrustStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string|resource|\Psr\Http\Message\StreamInterface> $certificateList
 * @property string $clientToken
 * @property list<Shapes\Tag> $tags
 */
class CreateTrustStoreRequest extends Request
{
    /**
     * @param array{
     *     certificateList: list<string|resource|\Psr\Http\Message\StreamInterface>,
     *     clientToken?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
