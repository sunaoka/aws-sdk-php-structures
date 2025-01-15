<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\UpdateResourceSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainName
 * @property string|null $RecordSetId
 */
class R53ResourceRecord extends Shape
{
    /**
     * @param array{
     *     DomainName?: string|null,
     *     RecordSetId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
