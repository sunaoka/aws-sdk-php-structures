<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PLAINTEXT'|'ZIPFILE' $CodeContentType
 * @property CodeContentDescription $CodeContentDescription
 */
class ApplicationCodeConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     CodeContentType: 'PLAINTEXT'|'ZIPFILE',
     *     CodeContentDescription?: CodeContentDescription
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
