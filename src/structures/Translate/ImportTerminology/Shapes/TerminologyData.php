<?php

namespace Sunaoka\Aws\Structures\Translate\ImportTerminology\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $File
 * @property 'CSV'|'TMX'|'TSV' $Format
 * @property 'UNI'|'MULTI'|null $Directionality
 */
class TerminologyData extends Shape
{
    /**
     * @param array{
     *     File: string|resource|\Psr\Http\Message\StreamInterface,
     *     Format: 'CSV'|'TMX'|'TSV',
     *     Directionality?: 'UNI'|'MULTI'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
