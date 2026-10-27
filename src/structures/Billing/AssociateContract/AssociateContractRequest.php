<?php

namespace Sunaoka\Aws\Structures\Billing\AssociateContract;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contractArn
 * @property string $contractDocumentId
 */
class AssociateContractRequest extends Request
{
    /**
     * @param array{
     *     contractArn: string,
     *     contractDocumentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
