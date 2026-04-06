<?php

namespace Sunaoka\Aws\Structures\Amplify\ListApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $webAclArn
 * @property 'ASSOCIATING'|'ASSOCIATION_FAILED'|'ASSOCIATION_SUCCESS'|'DISASSOCIATING'|'DISASSOCIATION_FAILED'|null $wafStatus
 * @property string|null $statusReason
 */
class WafConfiguration extends Shape
{
    /**
     * @param array{
     *     webAclArn?: string|null,
     *     wafStatus?: 'ASSOCIATING'|'ASSOCIATION_FAILED'|'ASSOCIATION_SUCCESS'|'DISASSOCIATING'|'DISASSOCIATION_FAILED'|null,
     *     statusReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
