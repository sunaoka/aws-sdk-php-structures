<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSetName
 */
class AwsIotAnalyticsParameters extends Shape
{
    /**
     * @param array{DataSetName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
