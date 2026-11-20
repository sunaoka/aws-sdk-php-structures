<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\DeleteAttributeMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $status
 * @property 'user'|'workload'|null $subjectType
 * @property 'x509SAN/URI'|'x509Subject/CN'|null $subjectSource
 */
class TipConfiguration extends Shape
{
    /**
     * @param array{
     *     status: 'ENABLED'|'DISABLED',
     *     subjectType?: 'user'|'workload'|null,
     *     subjectSource?: 'x509SAN/URI'|'x509Subject/CN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
