<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartBuild\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_CACHE'|'S3'|'LOCAL' $type
 * @property string $location
 * @property list<'LOCAL_DOCKER_LAYER_CACHE'|'LOCAL_SOURCE_CACHE'|'LOCAL_CUSTOM_CACHE'> $modes
 */
class ProjectCache extends Shape
{
    /**
     * @param array{
     *     type: 'NO_CACHE'|'S3'|'LOCAL',
     *     location?: string,
     *     modes?: list<'LOCAL_DOCKER_LAYER_CACHE'|'LOCAL_SOURCE_CACHE'|'LOCAL_CUSTOM_CACHE'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
