<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\GetCompatibleElasticsearchVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceVersion
 * @property list<string> $TargetVersions
 */
class CompatibleVersionsMap extends Shape
{
    /**
     * @param array{
     *     SourceVersion?: string,
     *     TargetVersions?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
