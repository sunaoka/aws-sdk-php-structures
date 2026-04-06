<?php

namespace Sunaoka\Aws\Structures\mgn\UnarchiveWave;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountID
 * @property string $waveID
 */
class UnarchiveWaveRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string|null,
     *     waveID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
