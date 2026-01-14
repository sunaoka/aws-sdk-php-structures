<?php

namespace Sunaoka\Aws\Structures\DataZone\GetMetadataGenerationRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS' $type
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELED'|'SUCCEEDED'|'FAILED'|'PARTIALLY_SUCCEEDED' $status
 * @property string|null $errorMessage
 */
class MetadataGenerationRunTypeStat extends Shape
{
    /**
     * @param array{
     *     type: 'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS',
     *     status: 'SUBMITTED'|'IN_PROGRESS'|'CANCELED'|'SUCCEEDED'|'FAILED'|'PARTIALLY_SUCCEEDED',
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
