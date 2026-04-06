<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateCodeSecurityScanConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'ORGANIZATION'|'ACCOUNT' $level
 * @property Shapes\CodeSecurityScanConfiguration $configuration
 * @property Shapes\ScopeSettings|null $scopeSettings
 * @property array<string, string>|null $tags
 */
class CreateCodeSecurityScanConfigurationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     level: 'ORGANIZATION'|'ACCOUNT',
     *     configuration: Shapes\CodeSecurityScanConfiguration,
     *     scopeSettings?: Shapes\ScopeSettings|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
