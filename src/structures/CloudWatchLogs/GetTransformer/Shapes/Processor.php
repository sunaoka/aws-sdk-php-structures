<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AddKeys|null $addKeys
 * @property CopyValue|null $copyValue
 * @property CSV|null $csv
 * @property DateTimeConverter|null $dateTimeConverter
 * @property DeleteKeys|null $deleteKeys
 * @property Grok|null $grok
 * @property ListToMap|null $listToMap
 * @property LowerCaseString|null $lowerCaseString
 * @property MoveKeys|null $moveKeys
 * @property ParseCloudfront|null $parseCloudfront
 * @property ParseJSON|null $parseJSON
 * @property ParseKeyValue|null $parseKeyValue
 * @property ParseRoute53|null $parseRoute53
 * @property ParseToOCSF|null $parseToOCSF
 * @property ParsePostgres|null $parsePostgres
 * @property ParseVPC|null $parseVPC
 * @property ParseWAF|null $parseWAF
 * @property RenameKeys|null $renameKeys
 * @property SplitString|null $splitString
 * @property SubstituteString|null $substituteString
 * @property TrimString|null $trimString
 * @property TypeConverter|null $typeConverter
 * @property UpperCaseString|null $upperCaseString
 */
class Processor extends Shape
{
    /**
     * @param array{
     *     addKeys?: AddKeys|null,
     *     copyValue?: CopyValue|null,
     *     csv?: CSV|null,
     *     dateTimeConverter?: DateTimeConverter|null,
     *     deleteKeys?: DeleteKeys|null,
     *     grok?: Grok|null,
     *     listToMap?: ListToMap|null,
     *     lowerCaseString?: LowerCaseString|null,
     *     moveKeys?: MoveKeys|null,
     *     parseCloudfront?: ParseCloudfront|null,
     *     parseJSON?: ParseJSON|null,
     *     parseKeyValue?: ParseKeyValue|null,
     *     parseRoute53?: ParseRoute53|null,
     *     parseToOCSF?: ParseToOCSF|null,
     *     parsePostgres?: ParsePostgres|null,
     *     parseVPC?: ParseVPC|null,
     *     parseWAF?: ParseWAF|null,
     *     renameKeys?: RenameKeys|null,
     *     splitString?: SplitString|null,
     *     substituteString?: SubstituteString|null,
     *     trimString?: TrimString|null,
     *     typeConverter?: TypeConverter|null,
     *     upperCaseString?: UpperCaseString|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
