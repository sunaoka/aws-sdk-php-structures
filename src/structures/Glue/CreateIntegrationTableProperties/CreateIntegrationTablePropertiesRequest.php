<?php

namespace Sunaoka\Aws\Structures\Glue\CreateIntegrationTableProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string $TableName
 * @property Shapes\SourceTableConfig $SourceTableConfig
 * @property Shapes\TargetTableConfig $TargetTableConfig
 */
class CreateIntegrationTablePropertiesRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     TableName: string,
     *     SourceTableConfig?: Shapes\SourceTableConfig,
     *     TargetTableConfig?: Shapes\TargetTableConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
