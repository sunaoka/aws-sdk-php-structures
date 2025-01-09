<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateRandom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $NumberOfBytes
 * @property string $CustomKeyStoreId
 * @property Shapes\RecipientInfo $Recipient
 */
class GenerateRandomRequest extends Request
{
    /**
     * @param array{
     *     NumberOfBytes?: int,
     *     CustomKeyStoreId?: string,
     *     Recipient?: Shapes\RecipientInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
