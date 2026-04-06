<?php

namespace Sunaoka\Aws\Structures\Chime\ValidateE911Address;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $StreetNumber
 * @property string $StreetInfo
 * @property string $City
 * @property string $State
 * @property string $Country
 * @property string $PostalCode
 */
class ValidateE911AddressRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     StreetNumber: string,
     *     StreetInfo: string,
     *     City: string,
     *     State: string,
     *     Country: string,
     *     PostalCode: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
