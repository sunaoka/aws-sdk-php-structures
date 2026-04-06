<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCaseAuditEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $iamPrincipalArn
 * @property UserUnion|null $user
 */
class AuditEventPerformedBy extends Shape
{
    /**
     * @param array{
     *     iamPrincipalArn: string,
     *     user?: UserUnion|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
