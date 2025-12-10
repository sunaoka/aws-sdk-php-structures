<?php

namespace Sunaoka\Aws\Structures\mgn\DeleteWave;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $waveID
 * @property string|null $accountID
 */
class DeleteWaveRequest extends Request
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
