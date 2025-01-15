<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListRetrievers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $applicationId
 * @property string|null $retrieverId
 * @property 'NATIVE_INDEX'|'KENDRA_INDEX'|null $type
 * @property 'CREATING'|'ACTIVE'|'FAILED'|null $status
 * @property string|null $displayName
 */
class Retriever extends Shape
{
    /**
     * @param array{
     *     applicationId?: string|null,
     *     retrieverId?: string|null,
     *     type?: 'NATIVE_INDEX'|'KENDRA_INDEX'|null,
     *     status?: 'CREATING'|'ACTIVE'|'FAILED'|null,
     *     displayName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
