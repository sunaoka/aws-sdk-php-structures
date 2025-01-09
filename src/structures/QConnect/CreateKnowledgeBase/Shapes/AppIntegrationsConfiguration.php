<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appIntegrationArn
 * @property list<string> $objectFields
 */
class AppIntegrationsConfiguration extends Shape
{
    /**
     * @param array{
     *     appIntegrationArn: string,
     *     objectFields?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
