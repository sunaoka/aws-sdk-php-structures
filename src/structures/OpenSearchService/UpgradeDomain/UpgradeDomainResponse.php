<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpgradeDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $UpgradeId
 * @property string|null $DomainName
 * @property string|null $TargetVersion
 * @property bool|null $PerformCheckOnly
 * @property array<string, string>|null $AdvancedOptions
 * @property Shapes\ChangeProgressDetails|null $ChangeProgressDetails
 */
class UpgradeDomainResponse extends Response
{
}
