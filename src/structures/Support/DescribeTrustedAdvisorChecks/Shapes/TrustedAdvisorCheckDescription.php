<?php

namespace Sunaoka\Aws\Structures\Support\DescribeTrustedAdvisorChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $description
 * @property string $category
 * @property list<string> $metadata
 */
class TrustedAdvisorCheckDescription extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     description: string,
     *     category: string,
     *     metadata: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
