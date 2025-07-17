<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateAddressListImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $AddressListId
 * @property string $Name
 * @property Shapes\ImportDataFormat $ImportDataFormat
 */
class CreateAddressListImportJobRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     AddressListId: string,
     *     Name: string,
     *     ImportDataFormat: Shapes\ImportDataFormat
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
