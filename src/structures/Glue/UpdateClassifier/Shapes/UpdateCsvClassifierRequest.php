<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateClassifier\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Delimiter
 * @property string $QuoteSymbol
 * @property 'UNKNOWN'|'PRESENT'|'ABSENT' $ContainsHeader
 * @property list<string> $Header
 * @property bool $DisableValueTrimming
 * @property bool $AllowSingleColumn
 * @property bool $CustomDatatypeConfigured
 * @property list<string> $CustomDatatypes
 * @property 'OpenCSVSerDe'|'LazySimpleSerDe'|'None' $Serde
 */
class UpdateCsvClassifierRequest extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Delimiter?: string,
     *     QuoteSymbol?: string,
     *     ContainsHeader?: 'UNKNOWN'|'PRESENT'|'ABSENT',
     *     Header?: list<string>,
     *     DisableValueTrimming?: bool,
     *     AllowSingleColumn?: bool,
     *     CustomDatatypeConfigured?: bool,
     *     CustomDatatypes?: list<string>,
     *     Serde?: 'OpenCSVSerDe'|'LazySimpleSerDe'|'None'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
