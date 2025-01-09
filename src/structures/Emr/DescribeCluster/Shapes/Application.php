<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Version
 * @property list<string> $Args
 * @property array<string, string> $AdditionalInfo
 */
class Application extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Version?: string,
     *     Args?: list<string>,
     *     AdditionalInfo?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
