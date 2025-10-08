<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'ENABLING'|'DISABLED'|'DISABLING' $status
 * @property 'NEW_IMAGE'|'OLD_IMAGE'|'KEYS_ONLY'|'NEW_AND_OLD_IMAGES'|null $viewType
 */
class CdcSpecificationSummary extends Shape
{
    /**
     * @param array{
     *     status: 'ENABLED'|'ENABLING'|'DISABLED'|'DISABLING',
     *     viewType?: 'NEW_IMAGE'|'OLD_IMAGE'|'KEYS_ONLY'|'NEW_AND_OLD_IMAGES'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
