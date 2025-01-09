<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpgradeDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $UpgradeId
 * @property string $DomainName
 * @property string $TargetVersion
 * @property bool $PerformCheckOnly
 * @property array<string, string> $AdvancedOptions
 * @property Shapes\ChangeProgressDetails $ChangeProgressDetails
 */
class UpgradeDomainResponse extends Response
{
}
