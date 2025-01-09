<?php

namespace Sunaoka\Aws\Structures\Kinesis\StopStreamEncryption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property 'NONE'|'KMS' $EncryptionType
 * @property string $KeyId
 * @property string $StreamARN
 */
class StopStreamEncryptionRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     EncryptionType: 'NONE'|'KMS',
     *     KeyId: string,
     *     StreamARN?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
