<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\DeleteKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyIdentifier
 * @property int<3, 180> $DeleteKeyInDays
 */
class DeleteKeyRequest extends Request
{
    /**
     * @param array{
     *     KeyIdentifier: string,
     *     DeleteKeyInDays?: int<3, 180>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
