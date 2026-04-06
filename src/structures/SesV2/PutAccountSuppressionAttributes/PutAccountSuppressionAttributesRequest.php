<?php

namespace Sunaoka\Aws\Structures\SesV2\PutAccountSuppressionAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'BOUNCE'|'COMPLAINT'>|null $SuppressedReasons
 * @property Shapes\SuppressionValidationAttributes|null $ValidationAttributes
 */
class PutAccountSuppressionAttributesRequest extends Request
{
    /**
     * @param array{
     *     SuppressedReasons?: list<'BOUNCE'|'COMPLAINT'>|null,
     *     ValidationAttributes?: Shapes\SuppressionValidationAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
