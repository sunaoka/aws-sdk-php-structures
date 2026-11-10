<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpgradeDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $TargetVersion
 * @property bool|null $PerformCheckOnly
 * @property array<string, string>|null $AdvancedOptions
 * @property Shapes\DeploymentStrategyOverrideOptions|null $DeploymentStrategyOptions
 */
class UpgradeDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     TargetVersion: string,
     *     PerformCheckOnly?: bool|null,
     *     AdvancedOptions?: array<string, string>|null,
     *     DeploymentStrategyOptions?: Shapes\DeploymentStrategyOverrideOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
