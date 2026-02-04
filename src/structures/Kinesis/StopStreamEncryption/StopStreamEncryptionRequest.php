<?php

namespace Sunaoka\Aws\Structures\Kinesis\StopStreamEncryption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property 'NONE'|'KMS' $EncryptionType
 * @property string $KeyId
 * @property string|null $StreamARN
 * @property string|null $StreamId
 */
class StopStreamEncryptionRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     EncryptionType: 'NONE'|'KMS',
     *     KeyId: string,
     *     StreamARN?: string|null,
     *     StreamId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
