<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDocumentationVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $version
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property string|null $description
 */
class DocumentationVersion extends Shape
{
    /**
     * @param array{
     *     version?: string|null,
     *     createdDate?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
