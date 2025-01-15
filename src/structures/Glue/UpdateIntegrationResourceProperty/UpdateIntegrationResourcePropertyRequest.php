<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateIntegrationResourceProperty;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property Shapes\SourceProcessingProperties|null $SourceProcessingProperties
 * @property Shapes\TargetProcessingProperties|null $TargetProcessingProperties
 */
class UpdateIntegrationResourcePropertyRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     SourceProcessingProperties?: Shapes\SourceProcessingProperties|null,
     *     TargetProcessingProperties?: Shapes\TargetProcessingProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
