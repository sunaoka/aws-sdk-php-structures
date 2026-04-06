<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateDataProtectionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $keywordRegex
 * @property string|null $patternDescription
 * @property string $patternName
 * @property string $patternRegex
 */
class CustomPattern extends Shape
{
    /**
     * @param array{
     *     keywordRegex?: string|null,
     *     patternDescription?: string|null,
     *     patternName: string,
     *     patternRegex: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
