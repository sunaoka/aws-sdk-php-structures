<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\CreateSystemInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Tag> $tags
 * @property Shapes\DefinitionDocument $definition
 * @property 'GREENGRASS'|'CLOUD' $target
 * @property string $greengrassGroupName
 * @property string $s3BucketName
 * @property Shapes\MetricsConfiguration $metricsConfiguration
 * @property string $flowActionsRoleArn
 */
class CreateSystemInstanceRequest extends Request
{
    /**
     * @param array{
     *     tags?: list<Shapes\Tag>,
     *     definition: Shapes\DefinitionDocument,
     *     target: 'GREENGRASS'|'CLOUD',
     *     greengrassGroupName?: string,
     *     s3BucketName?: string,
     *     metricsConfiguration?: Shapes\MetricsConfiguration,
     *     flowActionsRoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
