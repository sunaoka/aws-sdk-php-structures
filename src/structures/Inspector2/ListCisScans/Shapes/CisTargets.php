<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $accountIds
 * @property array<string, list<string>> $targetResourceTags
 */
class CisTargets extends Shape
{
    /**
     * @param array{
     *     accountIds?: list<string>,
     *     targetResourceTags?: array<string, list<string>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
