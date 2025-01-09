<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property AccountLevel $AccountLevel
 * @property IncludeShape $Include
 * @property Exclude $Exclude
 * @property StorageLensDataExport $DataExport
 * @property bool $IsEnabled
 * @property StorageLensAwsOrg $AwsOrg
 * @property string $StorageLensArn
 */
class StorageLensConfiguration extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     AccountLevel: AccountLevel,
     *     Include?: IncludeShape,
     *     Exclude?: Exclude,
     *     DataExport?: StorageLensDataExport,
     *     IsEnabled: bool,
     *     AwsOrg?: StorageLensAwsOrg,
     *     StorageLensArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
