<?php

namespace Sunaoka\Aws\Structures\MailManager\StopAddressListImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class StopAddressListImportJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
