<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDocumentationVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $version
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property string $description
 */
class DocumentationVersion extends Shape
{
    /**
     * @param array{
     *     version?: string,
     *     createdDate?: \Aws\Api\DateTimeResult,
     *     description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
