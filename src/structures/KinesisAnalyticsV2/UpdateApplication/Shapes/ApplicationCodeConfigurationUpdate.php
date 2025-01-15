<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PLAINTEXT'|'ZIPFILE'|null $CodeContentTypeUpdate
 * @property CodeContentUpdate|null $CodeContentUpdate
 */
class ApplicationCodeConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     CodeContentTypeUpdate?: 'PLAINTEXT'|'ZIPFILE'|null,
     *     CodeContentUpdate?: CodeContentUpdate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
