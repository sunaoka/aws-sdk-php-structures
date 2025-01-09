<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateIntegrationResourceProperty;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property Shapes\SourceProcessingProperties $SourceProcessingProperties
 * @property Shapes\TargetProcessingProperties $TargetProcessingProperties
 */
class UpdateIntegrationResourcePropertyRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     SourceProcessingProperties?: Shapes\SourceProcessingProperties,
     *     TargetProcessingProperties?: Shapes\TargetProcessingProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
