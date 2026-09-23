<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INDEX_ONLY'|'START_END_ONLY'|'INDEX_WITH_START_END'|null $ContentKeyPeriodTiming
 */
class ContentKeyPeriodConfiguration extends Shape
{
    /**
     * @param array{ContentKeyPeriodTiming?: 'INDEX_ONLY'|'START_END_ONLY'|'INDEX_WITH_START_END'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
