<?php

namespace Sunaoka\Aws\Structures\Translate\ImportTerminology\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $File
 * @property 'CSV'|'TMX'|'TSV' $Format
 * @property 'UNI'|'MULTI' $Directionality
 */
class TerminologyData extends Shape
{
    /**
     * @param array{
     *     File: string,
     *     Format: 'CSV'|'TMX'|'TSV',
     *     Directionality?: 'UNI'|'MULTI'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
