<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AdapterId
 * @property list<string>|null $Pages
 * @property string $Version
 */
class Adapter extends Shape
{
    /**
     * @param array{
     *     AdapterId: string,
     *     Pages?: list<string>|null,
     *     Version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
