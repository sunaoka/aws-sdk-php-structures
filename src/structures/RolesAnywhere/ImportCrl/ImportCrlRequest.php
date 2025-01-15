<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\ImportCrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $crlData
 * @property bool|null $enabled
 * @property string $name
 * @property list<Shapes\Tag>|null $tags
 * @property string $trustAnchorArn
 */
class ImportCrlRequest extends Request
{
    /**
     * @param array{
     *     crlData: string|resource|\Psr\Http\Message\StreamInterface,
     *     enabled?: bool|null,
     *     name: string,
     *     tags?: list<Shapes\Tag>|null,
     *     trustAnchorArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
