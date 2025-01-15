<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\StartAudienceGenerationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $queryString
 * @property string|null $analysisTemplateArn
 * @property array<string, string>|null $parameters
 */
class ProtectedQuerySQLParameters extends Shape
{
    /**
     * @param array{
     *     queryString?: string|null,
     *     analysisTemplateArn?: string|null,
     *     parameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
