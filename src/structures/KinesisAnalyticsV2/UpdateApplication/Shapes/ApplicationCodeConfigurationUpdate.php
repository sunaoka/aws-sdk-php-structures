<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PLAINTEXT'|'ZIPFILE' $CodeContentTypeUpdate
 * @property CodeContentUpdate $CodeContentUpdate
 */
class ApplicationCodeConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     CodeContentTypeUpdate?: 'PLAINTEXT'|'ZIPFILE',
     *     CodeContentUpdate?: CodeContentUpdate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
