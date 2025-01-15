<?php

namespace Sunaoka\Aws\Structures\FSx\ReleaseFileSystemNfsV3Locks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 * @property string|null $ClientRequestToken
 */
class ReleaseFileSystemNfsV3LocksRequest extends Request
{
    /**
     * @param array{
     *     FileSystemId: string,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
