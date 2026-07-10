<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KnowledgeBaseArn
 * @property list<string>|null $LinkedDataSourceIds
 */
class FMKBParameters extends Shape
{
    /**
     * @param array{
     *     KnowledgeBaseArn: string,
     *     LinkedDataSourceIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
