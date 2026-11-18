<?php

namespace Sunaoka\Aws\Structures\ElementalInference\ListQuestionSetVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $version
 * @property string|null $description
 * @property string $sha256
 * @property \Aws\Api\DateTimeResult $lastModifiedAt
 */
class QuestionSetVersionSummary extends Shape
{
    /**
     * @param array{
     *     version: string,
     *     description?: string|null,
     *     sha256: string,
     *     lastModifiedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
