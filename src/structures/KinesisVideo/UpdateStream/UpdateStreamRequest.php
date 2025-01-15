<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UpdateStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property string|null $StreamARN
 * @property string $CurrentVersion
 * @property string|null $DeviceName
 * @property string|null $MediaType
 */
class UpdateStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     StreamARN?: string|null,
     *     CurrentVersion: string,
     *     DeviceName?: string|null,
     *     MediaType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
