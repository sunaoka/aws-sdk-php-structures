<?php

namespace Sunaoka\Aws\Structures\ConfigService\StartResourceEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceId
 * @property string $ResourceType
 * @property string $ResourceConfiguration
 * @property 'CFN_RESOURCE_SCHEMA' $ResourceConfigurationSchemaType
 */
class ResourceDetails extends Shape
{
    /**
     * @param array{
     *     ResourceId: string,
     *     ResourceType: string,
     *     ResourceConfiguration: string,
     *     ResourceConfigurationSchemaType?: 'CFN_RESOURCE_SCHEMA'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
