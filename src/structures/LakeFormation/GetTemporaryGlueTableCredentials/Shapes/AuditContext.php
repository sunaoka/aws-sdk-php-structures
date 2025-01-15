<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetTemporaryGlueTableCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AdditionalAuditContext
 */
class AuditContext extends Shape
{
    /**
     * @param array{AdditionalAuditContext?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
