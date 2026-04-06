<?php

namespace Sunaoka\Aws\Structures\Glue\CreateIntegrationTableProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string $TableName
 * @property Shapes\SourceTableConfig|null $SourceTableConfig
 * @property Shapes\TargetTableConfig|null $TargetTableConfig
 */
class CreateIntegrationTablePropertiesRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     TableName: string,
     *     SourceTableConfig?: Shapes\SourceTableConfig|null,
     *     TargetTableConfig?: Shapes\TargetTableConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
