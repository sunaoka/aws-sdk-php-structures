<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AddKeys $addKeys
 * @property CopyValue $copyValue
 * @property CSV $csv
 * @property DateTimeConverter $dateTimeConverter
 * @property DeleteKeys $deleteKeys
 * @property Grok $grok
 * @property ListToMap $listToMap
 * @property LowerCaseString $lowerCaseString
 * @property MoveKeys $moveKeys
 * @property ParseCloudfront $parseCloudfront
 * @property ParseJSON $parseJSON
 * @property ParseKeyValue $parseKeyValue
 * @property ParseRoute53 $parseRoute53
 * @property ParsePostgres $parsePostgres
 * @property ParseVPC $parseVPC
 * @property ParseWAF $parseWAF
 * @property RenameKeys $renameKeys
 * @property SplitString $splitString
 * @property SubstituteString $substituteString
 * @property TrimString $trimString
 * @property TypeConverter $typeConverter
 * @property UpperCaseString $upperCaseString
 */
class Processor extends Shape
{
    /**
     * @param array{
     *     addKeys?: AddKeys,
     *     copyValue?: CopyValue,
     *     csv?: CSV,
     *     dateTimeConverter?: DateTimeConverter,
     *     deleteKeys?: DeleteKeys,
     *     grok?: Grok,
     *     listToMap?: ListToMap,
     *     lowerCaseString?: LowerCaseString,
     *     moveKeys?: MoveKeys,
     *     parseCloudfront?: ParseCloudfront,
     *     parseJSON?: ParseJSON,
     *     parseKeyValue?: ParseKeyValue,
     *     parseRoute53?: ParseRoute53,
     *     parsePostgres?: ParsePostgres,
     *     parseVPC?: ParseVPC,
     *     parseWAF?: ParseWAF,
     *     renameKeys?: RenameKeys,
     *     splitString?: SplitString,
     *     substituteString?: SubstituteString,
     *     trimString?: TrimString,
     *     typeConverter?: TypeConverter,
     *     upperCaseString?: UpperCaseString
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
