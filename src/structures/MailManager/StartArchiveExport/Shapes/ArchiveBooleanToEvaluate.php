<?php

namespace Sunaoka\Aws\Structures\MailManager\StartArchiveExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HAS_ATTACHMENTS'|null $Attribute
 */
class ArchiveBooleanToEvaluate extends Shape
{
    /**
     * @param array{Attribute?: 'HAS_ATTACHMENTS'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
