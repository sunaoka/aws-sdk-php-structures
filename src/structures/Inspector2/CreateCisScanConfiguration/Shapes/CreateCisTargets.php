<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateCisScanConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $accountIds
 * @property array<string, list<string>> $targetResourceTags
 */
class CreateCisTargets extends Shape
{
    /**
     * @param array{
     *     accountIds: list<string>,
     *     targetResourceTags: array<string, list<string>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
