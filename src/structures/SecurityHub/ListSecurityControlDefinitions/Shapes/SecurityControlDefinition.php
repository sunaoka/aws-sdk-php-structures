<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListSecurityControlDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecurityControlId
 * @property string $Title
 * @property string $Description
 * @property string $RemediationUrl
 * @property 'LOW'|'MEDIUM'|'HIGH'|'CRITICAL' $SeverityRating
 * @property 'AVAILABLE'|'UNAVAILABLE' $CurrentRegionAvailability
 * @property list<'Parameters'>|null $CustomizableProperties
 * @property array<string, ParameterDefinition>|null $ParameterDefinitions
 */
class SecurityControlDefinition extends Shape
{
    /**
     * @param array{
     *     SecurityControlId: string,
     *     Title: string,
     *     Description: string,
     *     RemediationUrl: string,
     *     SeverityRating: 'LOW'|'MEDIUM'|'HIGH'|'CRITICAL',
     *     CurrentRegionAvailability: 'AVAILABLE'|'UNAVAILABLE',
     *     CustomizableProperties?: list<'Parameters'>|null,
     *     ParameterDefinitions?: array<string, ParameterDefinition>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
