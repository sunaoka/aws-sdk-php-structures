<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateDataProtectionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $keywordRegex
 * @property string $patternDescription
 * @property string $patternName
 * @property string $patternRegex
 */
class CustomPattern extends Shape
{
    /**
     * @param array{
     *     keywordRegex?: string,
     *     patternDescription?: string,
     *     patternName: string,
     *     patternRegex: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
