<?php

namespace Sunaoka\Aws\Structures\ELBProxy\GetProxyUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'not-validated'|'valid'|'invalid' $validationStatus
 * @property 'in-progress'|'complete'|'skipped'|'failed'|'cancelled' $propagationStatus
 * @property list<string>|null $reasons
 */
class ProxyUpdateState extends Shape
{
    /**
     * @param array{
     *     validationStatus: 'not-validated'|'valid'|'invalid',
     *     propagationStatus: 'in-progress'|'complete'|'skipped'|'failed'|'cancelled',
     *     reasons?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
