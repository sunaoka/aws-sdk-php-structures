<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Name
 * @property array<string, string> $tags
 * @property string $CreationDate
 */
class ApplicationResponse extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Id: string,
     *     Name: string,
     *     tags?: array<string, string>,
     *     CreationDate?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
