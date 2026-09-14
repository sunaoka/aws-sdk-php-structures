<?php

namespace Sunaoka\Aws\Structures\Glue\ListIntegrationTableProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property string $TableName
 * @property SourceTableConfig|null $SourceTableConfig
 * @property TargetTableConfig|null $TargetTableConfig
 */
class IntegrationTableProperties extends Shape
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     TableName: string,
     *     SourceTableConfig?: SourceTableConfig|null,
     *     TargetTableConfig?: TargetTableConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
