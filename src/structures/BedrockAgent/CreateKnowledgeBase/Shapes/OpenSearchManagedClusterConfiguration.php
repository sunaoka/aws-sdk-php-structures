<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainArn
 * @property string $domainEndpoint
 * @property OpenSearchManagedClusterFieldMapping $fieldMapping
 * @property string $vectorIndexName
 */
class OpenSearchManagedClusterConfiguration extends Shape
{
    /**
     * @param array{
     *     domainArn: string,
     *     domainEndpoint: string,
     *     fieldMapping: OpenSearchManagedClusterFieldMapping,
     *     vectorIndexName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
