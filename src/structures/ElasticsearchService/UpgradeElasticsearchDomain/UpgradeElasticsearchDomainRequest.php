<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpgradeElasticsearchDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $TargetVersion
 * @property bool|null $PerformCheckOnly
 * @property Shapes\DeploymentStrategyOverrideOptions|null $DeploymentStrategyOptions
 */
class UpgradeElasticsearchDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     TargetVersion: string,
     *     PerformCheckOnly?: bool|null,
     *     DeploymentStrategyOptions?: Shapes\DeploymentStrategyOverrideOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
