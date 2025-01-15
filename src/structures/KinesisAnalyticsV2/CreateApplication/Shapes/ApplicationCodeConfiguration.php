<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CodeContent|null $CodeContent
 * @property 'PLAINTEXT'|'ZIPFILE' $CodeContentType
 */
class ApplicationCodeConfiguration extends Shape
{
    /**
     * @param array{
     *     CodeContent?: CodeContent|null,
     *     CodeContentType: 'PLAINTEXT'|'ZIPFILE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
