<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateWave;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountID
 * @property string|null $description
 * @property string|null $name
 * @property string $waveID
 */
class UpdateWaveRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string|null,
     *     description?: string|null,
     *     name?: string|null,
     *     waveID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
