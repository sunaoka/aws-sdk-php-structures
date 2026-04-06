<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\CreateStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DeviceName
 * @property string $StreamName
 * @property string|null $MediaType
 * @property string|null $KmsKeyId
 * @property int<0, max>|null $DataRetentionInHours
 * @property array<string, string>|null $Tags
 */
class CreateStreamRequest extends Request
{
    /**
     * @param array{
     *     DeviceName?: string|null,
     *     StreamName: string,
     *     MediaType?: string|null,
     *     KmsKeyId?: string|null,
     *     DataRetentionInHours?: int<0, max>|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
