<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateRandom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1024> $NumberOfBytes
 * @property string $CustomKeyStoreId
 * @property Shapes\RecipientInfo $Recipient
 */
class GenerateRandomRequest extends Request
{
    /**
     * @param array{
     *     NumberOfBytes?: int<1, 1024>,
     *     CustomKeyStoreId?: string,
     *     Recipient?: Shapes\RecipientInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
