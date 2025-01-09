<?php

namespace Sunaoka\Aws\Structures\mgn\CreateWave;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property string $description
 * @property string $name
 * @property array<string, string> $tags
 */
class CreateWaveRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     description?: string,
     *     name: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
