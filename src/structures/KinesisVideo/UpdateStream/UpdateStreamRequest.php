<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UpdateStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $StreamARN
 * @property string $CurrentVersion
 * @property string $DeviceName
 * @property string $MediaType
 */
class UpdateStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     StreamARN?: string,
     *     CurrentVersion: string,
     *     DeviceName?: string,
     *     MediaType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
