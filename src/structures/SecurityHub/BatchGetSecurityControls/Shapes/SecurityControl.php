<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetSecurityControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecurityControlId
 * @property string $SecurityControlArn
 * @property string $Title
 * @property string $Description
 * @property string $RemediationUrl
 * @property 'LOW'|'MEDIUM'|'HIGH'|'CRITICAL' $SeverityRating
 * @property 'ENABLED'|'DISABLED' $SecurityControlStatus
 * @property 'READY'|'UPDATING' $UpdateStatus
 * @property array<string, ParameterConfiguration> $Parameters
 * @property string $LastUpdateReason
 */
class SecurityControl extends Shape
{
    /**
     * @param array{
     *     SecurityControlId: string,
     *     SecurityControlArn: string,
     *     Title: string,
     *     Description: string,
     *     RemediationUrl: string,
     *     SeverityRating: 'LOW'|'MEDIUM'|'HIGH'|'CRITICAL',
     *     SecurityControlStatus: 'ENABLED'|'DISABLED',
     *     UpdateStatus?: 'READY'|'UPDATING',
     *     Parameters?: array<string, ParameterConfiguration>,
     *     LastUpdateReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
