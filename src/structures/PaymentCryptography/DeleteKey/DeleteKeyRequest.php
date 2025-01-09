<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\DeleteKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyIdentifier
 * @property int $DeleteKeyInDays
 */
class DeleteKeyRequest extends Request
{
    /**
     * @param array{
     *     KeyIdentifier: string,
     *     DeleteKeyInDays?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
