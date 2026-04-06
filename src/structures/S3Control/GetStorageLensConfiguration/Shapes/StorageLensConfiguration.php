<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property AccountLevel $AccountLevel
 * @property IncludeShape|null $Include
 * @property Exclude|null $Exclude
 * @property StorageLensDataExport|null $DataExport
 * @property bool $IsEnabled
 * @property StorageLensAwsOrg|null $AwsOrg
 * @property string|null $StorageLensArn
 */
class StorageLensConfiguration extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     AccountLevel: AccountLevel,
     *     Include?: IncludeShape|null,
     *     Exclude?: Exclude|null,
     *     DataExport?: StorageLensDataExport|null,
     *     IsEnabled: bool,
     *     AwsOrg?: StorageLensAwsOrg|null,
     *     StorageLensArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
