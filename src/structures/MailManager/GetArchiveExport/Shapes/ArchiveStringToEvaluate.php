<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TO'|'FROM'|'CC'|'SUBJECT'|'ENVELOPE_TO'|'ENVELOPE_FROM' $Attribute
 */
class ArchiveStringToEvaluate extends Shape
{
    /**
     * @param array{Attribute?: 'TO'|'FROM'|'CC'|'SUBJECT'|'ENVELOPE_TO'|'ENVELOPE_FROM'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
