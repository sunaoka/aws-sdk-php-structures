<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateAnnotationStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GENERIC'|'CHR_POS'|'CHR_POS_REF_ALT'|'CHR_START_END_ONE_BASE'|'CHR_START_END_REF_ALT_ONE_BASE'|'CHR_START_END_ZERO_BASE'|'CHR_START_END_REF_ALT_ZERO_BASE'|null $annotationType
 * @property array<'CHR'|'START'|'END'|'REF'|'ALT'|'POS', string>|null $formatToHeader
 * @property list<array<string, 'LONG'|'INT'|'STRING'|'FLOAT'|'DOUBLE'|'BOOLEAN'>>|null $schema
 */
class TsvStoreOptions extends Shape
{
    /**
     * @param array{
     *     annotationType?: 'GENERIC'|'CHR_POS'|'CHR_POS_REF_ALT'|'CHR_START_END_ONE_BASE'|'CHR_START_END_REF_ALT_ONE_BASE'|'CHR_START_END_ZERO_BASE'|'CHR_START_END_REF_ALT_ZERO_BASE'|null,
     *     formatToHeader?: array<'CHR'|'START'|'END'|'REF'|'ALT'|'POS', string>|null,
     *     schema?: list<array<string, 'LONG'|'INT'|'STRING'|'FLOAT'|'DOUBLE'|'BOOLEAN'>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
