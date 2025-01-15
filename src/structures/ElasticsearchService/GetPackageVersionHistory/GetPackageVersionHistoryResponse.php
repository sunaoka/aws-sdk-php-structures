<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\GetPackageVersionHistory;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $PackageID
 * @property list<Shapes\PackageVersionHistory>|null $PackageVersionHistoryList
 * @property string|null $NextToken
 */
class GetPackageVersionHistoryResponse extends Response
{
}
