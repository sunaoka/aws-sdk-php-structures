<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'INACCESSIBLE_ENCRYPTION_KEY' $Status
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property bool $IsOwned
 * @property string $Arn
 */
class MemberSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Description?: string,
     *     Status?: 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'INACCESSIBLE_ENCRYPTION_KEY',
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     IsOwned?: bool,
     *     Arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
