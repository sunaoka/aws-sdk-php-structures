<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpgradeElasticsearchDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DomainName
 * @property string|null $TargetVersion
 * @property bool|null $PerformCheckOnly
 * @property Shapes\ChangeProgressDetails|null $ChangeProgressDetails
 */
class UpgradeElasticsearchDomainResponse extends Response
{
}
