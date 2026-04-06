<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveSearch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TO'|'FROM'|'CC'|'SUBJECT'|null $Attribute
 */
class ArchiveStringToEvaluate extends Shape
{
    /**
     * @param array{Attribute?: 'TO'|'FROM'|'CC'|'SUBJECT'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
