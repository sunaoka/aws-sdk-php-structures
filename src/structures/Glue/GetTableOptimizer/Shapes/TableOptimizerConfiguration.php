<?php

namespace Sunaoka\Aws\Structures\Glue\GetTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property bool $enabled
 * @property TableOptimizerVpcConfiguration $vpcConfiguration
 * @property RetentionConfiguration $retentionConfiguration
 * @property OrphanFileDeletionConfiguration $orphanFileDeletionConfiguration
 */
class TableOptimizerConfiguration extends Shape
{
    /**
     * @param array{
     *     roleArn?: string,
     *     enabled?: bool,
     *     vpcConfiguration?: TableOptimizerVpcConfiguration,
     *     retentionConfiguration?: RetentionConfiguration,
     *     orphanFileDeletionConfiguration?: OrphanFileDeletionConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
