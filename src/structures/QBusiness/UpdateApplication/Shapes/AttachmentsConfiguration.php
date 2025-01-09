<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $attachmentsControlMode
 */
class AttachmentsConfiguration extends Shape
{
    /**
     * @param array{attachmentsControlMode: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
