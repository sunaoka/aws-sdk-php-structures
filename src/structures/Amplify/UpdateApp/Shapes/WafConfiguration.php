<?php

namespace Sunaoka\Aws\Structures\Amplify\UpdateApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $webAclArn
 * @property 'ASSOCIATING'|'ASSOCIATION_FAILED'|'ASSOCIATION_SUCCESS'|'DISASSOCIATING'|'DISASSOCIATION_FAILED' $wafStatus
 * @property string $statusReason
 */
class WafConfiguration extends Shape
{
    /**
     * @param array{
     *     webAclArn?: string,
     *     wafStatus?: 'ASSOCIATING'|'ASSOCIATION_FAILED'|'ASSOCIATION_SUCCESS'|'DISASSOCIATING'|'DISASSOCIATION_FAILED',
     *     statusReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
