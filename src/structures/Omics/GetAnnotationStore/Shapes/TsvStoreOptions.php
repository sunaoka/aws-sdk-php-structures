<?php

namespace Sunaoka\Aws\Structures\Omics\GetAnnotationStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GENERIC'|'CHR_POS'|'CHR_POS_REF_ALT'|'CHR_START_END_ONE_BASE'|'CHR_START_END_REF_ALT_ONE_BASE'|'CHR_START_END_ZERO_BASE'|'CHR_START_END_REF_ALT_ZERO_BASE' $annotationType
 * @property array<'CHR'|'START'|'END'|'REF'|'ALT'|'POS', string> $formatToHeader
 * @property list<array<string, 'LONG'|'INT'|'STRING'|'FLOAT'|'DOUBLE'|'BOOLEAN'>> $schema
 */
class TsvStoreOptions extends Shape
{
    /**
     * @param array{
     *     annotationType?: 'GENERIC'|'CHR_POS'|'CHR_POS_REF_ALT'|'CHR_START_END_ONE_BASE'|'CHR_START_END_REF_ALT_ONE_BASE'|'CHR_START_END_ZERO_BASE'|'CHR_START_END_REF_ALT_ZERO_BASE',
     *     formatToHeader?: array<'CHR'|'START'|'END'|'REF'|'ALT'|'POS', string>,
     *     schema?: list<array<string, 'LONG'|'INT'|'STRING'|'FLOAT'|'DOUBLE'|'BOOLEAN'>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
