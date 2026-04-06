<?php

namespace Sunaoka\Aws\Structures\QLDB\UpdateLedger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property bool|null $DeletionProtection
 * @property string|null $KmsKey
 */
class UpdateLedgerRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DeletionProtection?: bool|null,
     *     KmsKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
