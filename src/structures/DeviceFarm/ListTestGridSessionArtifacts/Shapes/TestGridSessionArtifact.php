<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListTestGridSessionArtifacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $filename
 * @property 'UNKNOWN'|'VIDEO'|'SELENIUM_LOG' $type
 * @property string $url
 */
class TestGridSessionArtifact extends Shape
{
    /**
     * @param array{
     *     filename?: string,
     *     type?: 'UNKNOWN'|'VIDEO'|'SELENIUM_LOG',
     *     url?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
