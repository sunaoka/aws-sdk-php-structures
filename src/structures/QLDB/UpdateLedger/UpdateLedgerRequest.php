<?php

namespace Sunaoka\Aws\Structures\QLDB\UpdateLedger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property bool $DeletionProtection
 * @property string $KmsKey
 */
class UpdateLedgerRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DeletionProtection?: bool,
     *     KmsKey?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
