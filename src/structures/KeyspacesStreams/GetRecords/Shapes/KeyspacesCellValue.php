<?php

namespace Sunaoka\Aws\Structures\KeyspacesStreams\GetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $asciiT
 * @property string|null $bigintT
 * @property \Psr\Http\Message\StreamInterface|null $blobT
 * @property bool|null $boolT
 * @property string|null $counterT
 * @property string|null $dateT
 * @property string|null $decimalT
 * @property string|null $doubleT
 * @property string|null $floatT
 * @property string|null $inetT
 * @property string|null $intT
 * @property list<KeyspacesCell>|null $listT
 * @property list<KeyspacesCellMapDefinition>|null $mapT
 * @property list<KeyspacesCell>|null $setT
 * @property string|null $smallintT
 * @property string|null $textT
 * @property string|null $timeT
 * @property string|null $timestampT
 * @property string|null $timeuuidT
 * @property string|null $tinyintT
 * @property list<KeyspacesCell>|null $tupleT
 * @property string|null $uuidT
 * @property string|null $varcharT
 * @property string|null $varintT
 * @property array<string, KeyspacesCell>|null $udtT
 */
class KeyspacesCellValue extends Shape
{
    /**
     * @param array{
     *     asciiT?: string|null,
     *     bigintT?: string|null,
     *     blobT?: \Psr\Http\Message\StreamInterface|null,
     *     boolT?: bool|null,
     *     counterT?: string|null,
     *     dateT?: string|null,
     *     decimalT?: string|null,
     *     doubleT?: string|null,
     *     floatT?: string|null,
     *     inetT?: string|null,
     *     intT?: string|null,
     *     listT?: list<KeyspacesCell>|null,
     *     mapT?: list<KeyspacesCellMapDefinition>|null,
     *     setT?: list<KeyspacesCell>|null,
     *     smallintT?: string|null,
     *     textT?: string|null,
     *     timeT?: string|null,
     *     timestampT?: string|null,
     *     timeuuidT?: string|null,
     *     tinyintT?: string|null,
     *     tupleT?: list<KeyspacesCell>|null,
     *     uuidT?: string|null,
     *     varcharT?: string|null,
     *     varintT?: string|null,
     *     udtT?: array<string, KeyspacesCell>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
