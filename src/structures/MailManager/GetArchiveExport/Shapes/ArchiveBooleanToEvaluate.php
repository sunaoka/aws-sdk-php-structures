<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HAS_ATTACHMENTS' $Attribute
 */
class ArchiveBooleanToEvaluate extends Shape
{
    /**
     * @param array{Attribute?: 'HAS_ATTACHMENTS'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
