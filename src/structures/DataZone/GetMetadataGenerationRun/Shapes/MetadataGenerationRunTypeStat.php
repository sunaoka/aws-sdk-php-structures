<?php

namespace Sunaoka\Aws\Structures\DataZone\GetMetadataGenerationRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $errorMessage
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELED'|'SUCCEEDED'|'FAILED'|'PARTIALLY_SUCCEEDED' $status
 * @property 'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS' $type
 */
class MetadataGenerationRunTypeStat extends Shape
{
    /**
     * @param array{
     *     errorMessage?: string|null,
     *     status: 'SUBMITTED'|'IN_PROGRESS'|'CANCELED'|'SUCCEEDED'|'FAILED'|'PARTIALLY_SUCCEEDED',
     *     type: 'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
