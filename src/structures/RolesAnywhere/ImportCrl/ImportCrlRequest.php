<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\ImportCrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $crlData
 * @property bool $enabled
 * @property string $name
 * @property list<Shapes\Tag> $tags
 * @property string $trustAnchorArn
 */
class ImportCrlRequest extends Request
{
    /**
     * @param array{
     *     crlData: string,
     *     enabled?: bool,
     *     name: string,
     *     tags?: list<Shapes\Tag>,
     *     trustAnchorArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
