<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeArchive;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchiveName
 */
class DescribeArchiveRequest extends Request
{
    /**
     * @param array{ArchiveName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
