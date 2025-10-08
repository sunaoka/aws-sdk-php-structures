<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCodeSecurityScanConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scanConfigurationArn
 * @property string $name
 * @property string $ownerAccountId
 * @property 'WEEKLY'|'MONTHLY'|'NEVER'|null $periodicScanFrequency
 * @property string|null $frequencyExpression
 * @property list<'PULL_REQUEST'|'PUSH'>|null $continuousIntegrationScanSupportedEvents
 * @property list<'SAST'|'IAC'|'SCA'> $ruleSetCategories
 * @property ScopeSettings|null $scopeSettings
 * @property array<string, string>|null $tags
 */
class CodeSecurityScanConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     scanConfigurationArn: string,
     *     name: string,
     *     ownerAccountId: string,
     *     periodicScanFrequency?: 'WEEKLY'|'MONTHLY'|'NEVER'|null,
     *     frequencyExpression?: string|null,
     *     continuousIntegrationScanSupportedEvents?: list<'PULL_REQUEST'|'PUSH'>|null,
     *     ruleSetCategories: list<'SAST'|'IAC'|'SCA'>,
     *     scopeSettings?: ScopeSettings|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
