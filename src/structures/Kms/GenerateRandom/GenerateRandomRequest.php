<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateRandom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1024>|null $NumberOfBytes
 * @property string|null $CustomKeyStoreId
 * @property Shapes\RecipientInfo|null $Recipient
 */
class GenerateRandomRequest extends Request
{
    /**
     * @param array{
     *     NumberOfBytes?: int<1, 1024>|null,
     *     CustomKeyStoreId?: string|null,
     *     Recipient?: Shapes\RecipientInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
