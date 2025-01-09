<?php

namespace Sunaoka\Aws\Structures\mgn\ArchiveWave;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property string $waveID
 */
class ArchiveWaveRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     waveID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
