<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateDataProtectionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $patternName
 * @property string $patternRegex
 * @property string|null $patternDescription
 * @property string|null $keywordRegex
 */
class CustomPattern extends Shape
{
    /**
     * @param array{
     *     patternName: string,
     *     patternRegex: string,
     *     patternDescription?: string|null,
     *     keywordRegex?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
