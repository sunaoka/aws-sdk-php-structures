<?php

namespace Sunaoka\Aws\Structures\Account\PutContactInformation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property Shapes\ContactInformation $ContactInformation
 */
class PutContactInformationRequest extends Request
{
    /**
     * @param array{
     *     AccountId?: string,
     *     ContactInformation: Shapes\ContactInformation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
