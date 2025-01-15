<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListTestGridSessionArtifacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $filename
 * @property 'UNKNOWN'|'VIDEO'|'SELENIUM_LOG'|null $type
 * @property string|null $url
 */
class TestGridSessionArtifact extends Shape
{
    /**
     * @param array{
     *     filename?: string|null,
     *     type?: 'UNKNOWN'|'VIDEO'|'SELENIUM_LOG'|null,
     *     url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
