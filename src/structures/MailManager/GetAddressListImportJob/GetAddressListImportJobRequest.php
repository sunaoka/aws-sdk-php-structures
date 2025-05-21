<?php

namespace Sunaoka\Aws\Structures\MailManager\GetAddressListImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class GetAddressListImportJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
