<?php

namespace Sunaoka\Aws\Structures\B2bi\ListTransformers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $transformerId
 * @property string $name
 * @property 'XML'|'JSON' $fileFormat
 * @property string $mappingTemplate
 * @property 'active'|'inactive' $status
 * @property EdiType $ediType
 * @property string|null $sampleDocument
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 */
class TransformerSummary extends Shape
{
    /**
     * @param array{
     *     transformerId: string,
     *     name: string,
     *     fileFormat: 'XML'|'JSON',
     *     mappingTemplate: string,
     *     status: 'active'|'inactive',
     *     ediType: EdiType,
     *     sampleDocument?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     modifiedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
