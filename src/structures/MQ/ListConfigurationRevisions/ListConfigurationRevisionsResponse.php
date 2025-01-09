<?php

namespace Sunaoka\Aws\Structures\MQ\ListConfigurationRevisions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ConfigurationId
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<Shapes\ConfigurationRevision> $Revisions
 */
class ListConfigurationRevisionsResponse extends Response
{
}
