<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\ListResourceSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property string $RecordSetId
 */
class R53ResourceRecord extends Shape
{
    /**
     * @param array{
     *     DomainName?: string,
     *     RecordSetId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
