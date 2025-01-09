<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetAccountLevelServiceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $AWSServiceAccessStatus
 * @property string $ServiceLinkedRole
 */
class OrgConfiguration extends Shape
{
    /**
     * @param array{
     *     AWSServiceAccessStatus: 'ENABLED'|'DISABLED',
     *     ServiceLinkedRole?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
