<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_CACHE'|'S3'|'LOCAL' $type
 * @property string|null $location
 * @property list<'LOCAL_DOCKER_LAYER_CACHE'|'LOCAL_SOURCE_CACHE'|'LOCAL_CUSTOM_CACHE'>|null $modes
 * @property string|null $cacheNamespace
 */
class ProjectCache extends Shape
{
    /**
     * @param array{
     *     type: 'NO_CACHE'|'S3'|'LOCAL',
     *     location?: string|null,
     *     modes?: list<'LOCAL_DOCKER_LAYER_CACHE'|'LOCAL_SOURCE_CACHE'|'LOCAL_CUSTOM_CACHE'>|null,
     *     cacheNamespace?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
