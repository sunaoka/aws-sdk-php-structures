<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchive;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchiveId
 */
class GetArchiveRequest extends Request
{
    /**
     * @param array{ArchiveId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
