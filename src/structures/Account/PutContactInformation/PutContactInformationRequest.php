<?php

namespace Sunaoka\Aws\Structures\Account\PutContactInformation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ContactInformation $ContactInformation
 * @property string|null $AccountId
 */
class PutContactInformationRequest extends Request
{
    /**
     * @param array{
     *     ContactInformation: Shapes\ContactInformation,
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
