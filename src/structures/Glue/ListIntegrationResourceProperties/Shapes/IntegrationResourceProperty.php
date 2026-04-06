<?php

namespace Sunaoka\Aws\Structures\Glue\ListIntegrationResourceProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property string|null $ResourcePropertyArn
 * @property SourceProcessingProperties|null $SourceProcessingProperties
 * @property TargetProcessingProperties|null $TargetProcessingProperties
 */
class IntegrationResourceProperty extends Shape
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     ResourcePropertyArn?: string|null,
     *     SourceProcessingProperties?: SourceProcessingProperties|null,
     *     TargetProcessingProperties?: TargetProcessingProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
