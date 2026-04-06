<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateWave;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $waveID
 * @property string|null $name
 * @property string|null $description
 * @property string|null $accountID
 */
class UpdateWaveRequest extends Request
{
    /**
     * @param array{
     *     waveID: string,
     *     name?: string|null,
     *     description?: string|null,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
