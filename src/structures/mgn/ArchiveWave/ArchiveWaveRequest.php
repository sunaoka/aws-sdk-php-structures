<?php

namespace Sunaoka\Aws\Structures\mgn\ArchiveWave;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $waveID
 * @property string|null $accountID
 */
class ArchiveWaveRequest extends Request
{
    /**
     * @param array{
     *     waveID: string,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
