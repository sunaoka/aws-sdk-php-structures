<?php

namespace Sunaoka\Aws\Structures\Glue\GetClassifier\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastUpdated
 * @property int $Version
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
class CsvClassifier extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastUpdated?: \Aws\Api\DateTimeResult,
     *     Version?: int,
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
