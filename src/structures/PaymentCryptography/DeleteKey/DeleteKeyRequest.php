<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\DeleteKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<3, 180>|null $DeleteKeyInDays
 * @property string $KeyIdentifier
 */
class DeleteKeyRequest extends Request
{
    /**
     * @param array{
     *     DeleteKeyInDays?: int<3, 180>|null,
     *     KeyIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
