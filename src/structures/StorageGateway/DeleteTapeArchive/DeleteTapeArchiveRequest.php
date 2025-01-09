<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DeleteTapeArchive;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TapeARN
 * @property bool $BypassGovernanceRetention
 */
class DeleteTapeArchiveRequest extends Request
{
    /**
     * @param array{
     *     TapeARN: string,
     *     BypassGovernanceRetention?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
