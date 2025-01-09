<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpgradeElasticsearchDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DomainName
 * @property string $TargetVersion
 * @property bool $PerformCheckOnly
 * @property Shapes\ChangeProgressDetails $ChangeProgressDetails
 */
class UpgradeElasticsearchDomainResponse extends Response
{
}
