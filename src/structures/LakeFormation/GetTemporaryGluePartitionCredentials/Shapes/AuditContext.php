<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetTemporaryGluePartitionCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AdditionalAuditContext
 */
class AuditContext extends Shape
{
    /**
     * @param array{AdditionalAuditContext?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
