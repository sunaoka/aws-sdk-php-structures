<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainEndpoint
 * @property string $domainArn
 * @property string $vectorIndexName
 * @property OpenSearchManagedClusterFieldMapping $fieldMapping
 */
class OpenSearchManagedClusterConfiguration extends Shape
{
    /**
     * @param array{
     *     domainEndpoint: string,
     *     domainArn: string,
     *     vectorIndexName: string,
     *     fieldMapping: OpenSearchManagedClusterFieldMapping
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
