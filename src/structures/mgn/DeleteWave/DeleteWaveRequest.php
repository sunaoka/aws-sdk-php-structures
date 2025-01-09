<?php

namespace Sunaoka\Aws\Structures\mgn\DeleteWave;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property string $waveID
 */
class DeleteWaveRequest extends Request
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
