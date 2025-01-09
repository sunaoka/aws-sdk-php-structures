<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\CreateStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceName
 * @property string $StreamName
 * @property string $MediaType
 * @property string $KmsKeyId
 * @property int<0, max> $DataRetentionInHours
 * @property array<string, string> $Tags
 */
class CreateStreamRequest extends Request
{
    /**
     * @param array{
     *     DeviceName?: string,
     *     StreamName: string,
     *     MediaType?: string,
     *     KmsKeyId?: string,
     *     DataRetentionInHours?: int<0, max>,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
