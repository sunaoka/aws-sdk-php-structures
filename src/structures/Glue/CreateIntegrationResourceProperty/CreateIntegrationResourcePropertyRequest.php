<?php

namespace Sunaoka\Aws\Structures\Glue\CreateIntegrationResourceProperty;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property Shapes\SourceProcessingProperties|null $SourceProcessingProperties
 * @property Shapes\TargetProcessingProperties|null $TargetProcessingProperties
 */
class CreateIntegrationResourcePropertyRequest extends Request
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
