<?php

namespace Sunaoka\Aws\Structures\Glue\GetClassifier\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property int|null $Version
 * @property string|null $Delimiter
 * @property string|null $QuoteSymbol
 * @property 'UNKNOWN'|'PRESENT'|'ABSENT'|null $ContainsHeader
 * @property list<string>|null $Header
 * @property bool|null $DisableValueTrimming
 * @property bool|null $AllowSingleColumn
 * @property bool|null $CustomDatatypeConfigured
 * @property list<string>|null $CustomDatatypes
 * @property 'OpenCSVSerDe'|'LazySimpleSerDe'|'None'|null $Serde
 */
class CsvClassifier extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     Version?: int|null,
     *     Delimiter?: string|null,
     *     QuoteSymbol?: string|null,
     *     ContainsHeader?: 'UNKNOWN'|'PRESENT'|'ABSENT'|null,
     *     Header?: list<string>|null,
     *     DisableValueTrimming?: bool|null,
     *     AllowSingleColumn?: bool|null,
     *     CustomDatatypeConfigured?: bool|null,
     *     CustomDatatypes?: list<string>|null,
     *     Serde?: 'OpenCSVSerDe'|'LazySimpleSerDe'|'None'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
