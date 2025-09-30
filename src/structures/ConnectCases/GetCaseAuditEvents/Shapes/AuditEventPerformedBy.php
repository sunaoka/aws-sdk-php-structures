<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCaseAuditEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserUnion|null $user
 * @property string $iamPrincipalArn
 */
class AuditEventPerformedBy extends Shape
{
    /**
     * @param array{
     *     user?: UserUnion|null,
     *     iamPrincipalArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
