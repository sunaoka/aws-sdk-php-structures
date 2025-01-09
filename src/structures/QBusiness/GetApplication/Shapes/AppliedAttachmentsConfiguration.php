<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $attachmentsControlMode
 */
class AppliedAttachmentsConfiguration extends Shape
{
    /**
     * @param array{attachmentsControlMode?: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
