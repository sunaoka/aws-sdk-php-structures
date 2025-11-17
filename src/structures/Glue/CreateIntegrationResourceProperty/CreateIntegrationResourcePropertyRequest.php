<?php

namespace Sunaoka\Aws\Structures\Glue\CreateIntegrationResourceProperty;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property Shapes\SourceProcessingProperties|null $SourceProcessingProperties
 * @property Shapes\TargetProcessingProperties|null $TargetProcessingProperties
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateIntegrationResourcePropertyRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     SourceProcessingProperties?: Shapes\SourceProcessingProperties|null,
     *     TargetProcessingProperties?: Shapes\TargetProcessingProperties|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
