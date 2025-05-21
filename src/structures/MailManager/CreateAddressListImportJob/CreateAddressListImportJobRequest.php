<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateAddressListImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AddressListId
 * @property string|null $ClientToken
 * @property Shapes\ImportDataFormat $ImportDataFormat
 * @property string $Name
 */
class CreateAddressListImportJobRequest extends Request
{
    /**
     * @param array{
     *     AddressListId: string,
     *     ClientToken?: string|null,
     *     ImportDataFormat: Shapes\ImportDataFormat,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
