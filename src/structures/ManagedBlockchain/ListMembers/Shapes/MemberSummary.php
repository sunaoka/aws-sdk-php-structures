<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'INACCESSIBLE_ENCRYPTION_KEY'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property bool|null $IsOwned
 * @property string|null $Arn
 */
class MemberSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Status?: 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'INACCESSIBLE_ENCRYPTION_KEY'|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     IsOwned?: bool|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
