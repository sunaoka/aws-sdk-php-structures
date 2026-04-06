<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $roleArn
 * @property bool|null $enabled
 * @property TableOptimizerVpcConfiguration|null $vpcConfiguration
 * @property RetentionConfiguration|null $retentionConfiguration
 * @property OrphanFileDeletionConfiguration|null $orphanFileDeletionConfiguration
 */
class TableOptimizerConfiguration extends Shape
{
    /**
     * @param array{
     *     roleArn?: string|null,
     *     enabled?: bool|null,
     *     vpcConfiguration?: TableOptimizerVpcConfiguration|null,
     *     retentionConfiguration?: RetentionConfiguration|null,
     *     orphanFileDeletionConfiguration?: OrphanFileDeletionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
