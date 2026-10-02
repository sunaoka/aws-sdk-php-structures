<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetRemediationsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Title
 * @property string $Url
 */
class KbArticle extends Shape
{
    /**
     * @param array{
     *     Title: string,
     *     Url: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
