<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListRetrievers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property string $retrieverId
 * @property 'NATIVE_INDEX'|'KENDRA_INDEX' $type
 * @property 'CREATING'|'ACTIVE'|'FAILED' $status
 * @property string $displayName
 */
class Retriever extends Shape
{
    /**
     * @param array{
     *     applicationId?: string,
     *     retrieverId?: string,
     *     type?: 'NATIVE_INDEX'|'KENDRA_INDEX',
     *     status?: 'CREATING'|'ACTIVE'|'FAILED',
     *     displayName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
