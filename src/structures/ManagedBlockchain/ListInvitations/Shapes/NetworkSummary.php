<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListInvitations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property 'HYPERLEDGER_FABRIC'|'ETHEREUM'|null $Framework
 * @property string|null $FrameworkVersion
 * @property 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'DELETING'|'DELETED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property string|null $Arn
 */
class NetworkSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Framework?: 'HYPERLEDGER_FABRIC'|'ETHEREUM'|null,
     *     FrameworkVersion?: string|null,
     *     Status?: 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'DELETING'|'DELETED'|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
