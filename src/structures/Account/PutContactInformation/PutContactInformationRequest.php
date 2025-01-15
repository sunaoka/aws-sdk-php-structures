<?php

namespace Sunaoka\Aws\Structures\Account\PutContactInformation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AccountId
 * @property Shapes\ContactInformation $ContactInformation
 */
class PutContactInformationRequest extends Request
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     ContactInformation: Shapes\ContactInformation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
