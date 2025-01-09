<?php

namespace Sunaoka\Aws\Structures\Route53\ChangeResourceRecordSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATE'|'DELETE'|'UPSERT' $Action
 * @property ResourceRecordSet $ResourceRecordSet
 */
class Change extends Shape
{
    /**
     * @param array{
     *     Action: 'CREATE'|'DELETE'|'UPSERT',
     *     ResourceRecordSet: ResourceRecordSet
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
