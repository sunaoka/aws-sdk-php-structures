<?php

namespace Sunaoka\Aws\Structures\Transfer\ImportHostKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerId
 * @property string $HostKeyBody
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 */
class ImportHostKeyRequest extends Request
{
    /**
     * @param array{
     *     ServerId: string,
     *     HostKeyBody: string,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
