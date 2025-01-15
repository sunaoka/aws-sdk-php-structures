<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $accountIds
 * @property array<string, list<string>>|null $targetResourceTags
 */
class CisTargets extends Shape
{
    /**
     * @param array{
     *     accountIds?: list<string>|null,
     *     targetResourceTags?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
