<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListInvitations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property 'HYPERLEDGER_FABRIC'|'ETHEREUM' $Framework
 * @property string $FrameworkVersion
 * @property 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'DELETING'|'DELETED' $Status
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property string $Arn
 */
class NetworkSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Description?: string,
     *     Framework?: 'HYPERLEDGER_FABRIC'|'ETHEREUM',
     *     FrameworkVersion?: string,
     *     Status?: 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'DELETING'|'DELETED',
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     Arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
