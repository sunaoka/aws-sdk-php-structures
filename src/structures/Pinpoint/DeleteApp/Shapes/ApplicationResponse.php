<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Name
 * @property array<string, string>|null $tags
 * @property string|null $CreationDate
 */
class ApplicationResponse extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Id: string,
     *     Name: string,
     *     tags?: array<string, string>|null,
     *     CreationDate?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
