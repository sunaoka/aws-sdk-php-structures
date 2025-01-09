<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $queryString
 * @property string $analysisTemplateArn
 * @property array<string, string> $parameters
 */
class ProtectedQuerySQLParameters extends Shape
{
    /**
     * @param array{
     *     queryString?: string,
     *     analysisTemplateArn?: string,
     *     parameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
