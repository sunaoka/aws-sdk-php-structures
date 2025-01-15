<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\CreateSystemInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Tag>|null $tags
 * @property Shapes\DefinitionDocument $definition
 * @property 'GREENGRASS'|'CLOUD' $target
 * @property string|null $greengrassGroupName
 * @property string|null $s3BucketName
 * @property Shapes\MetricsConfiguration|null $metricsConfiguration
 * @property string|null $flowActionsRoleArn
 */
class CreateSystemInstanceRequest extends Request
{
    /**
     * @param array{
     *     tags?: list<Shapes\Tag>|null,
     *     definition: Shapes\DefinitionDocument,
     *     target: 'GREENGRASS'|'CLOUD',
     *     greengrassGroupName?: string|null,
     *     s3BucketName?: string|null,
     *     metricsConfiguration?: Shapes\MetricsConfiguration|null,
     *     flowActionsRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
