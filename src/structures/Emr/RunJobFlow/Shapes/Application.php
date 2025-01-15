<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Version
 * @property list<string>|null $Args
 * @property array<string, string>|null $AdditionalInfo
 */
class Application extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Version?: string|null,
     *     Args?: list<string>|null,
     *     AdditionalInfo?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
