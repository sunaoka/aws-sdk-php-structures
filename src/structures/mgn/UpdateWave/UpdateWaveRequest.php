<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateWave;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property string $description
 * @property string $name
 * @property string $waveID
 */
class UpdateWaveRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     description?: string,
     *     name?: string,
     *     waveID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
